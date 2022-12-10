from __future__ import unicode_literals
from django.shortcuts import render, get_object_or_404
from django.contrib.auth.mixins import LoginRequiredMixin, UserPassesTestMixin
from django.contrib.auth.models import User
from django.views.generic import (
    ListView,
    DetailView,
    CreateView,
    UpdateView,
    DeleteView,
    TemplateView
)
from .models import Post

from django.views.decorators.csrf import ensure_csrf_cookie

from hitcount.views import HitCountDetailView

class PostMixinDetailView(object):
    """
    Mixin to same us some typing.  Adds context for us!
    """
    model = Post

    def get_context_data(self, **kwargs):
        context = super(PostMixinDetailView, self).get_context_data(**kwargs)
        context['post_list'] = Post.objects.all()[:5]
        context['post_views'] = ["ajax", "detail", "detail-with-count"]
        return context


class IndexView(PostMixinDetailView, TemplateView):
    template_name = 'blog/index.html'


class PostDetailJSONView(PostMixinDetailView, DetailView):
    template_name = 'blogpost/post_ajax.html'

    @classmethod
    def as_view(cls, **initkwargs):
        view = super(PostDetailJSONView, cls).as_view(**initkwargs)
        return ensure_csrf_cookie(view)


class PostDetailView(PostMixinDetailView, HitCountDetailView):
    """
    Generic hitcount class based view.
    """
    pass


class PostCountHitDetailView(PostMixinDetailView, HitCountDetailView):
    """
    Generic hitcount class based view that will also perform the hitcount logic.
    """
    count_hit = True



def home(request):
    context = {
        'posts': Post.objects.all()
    }
    return render(request, 'blog/home.html', context)


class PostListView(ListView):
    model = Post
    template_name = 'blog/home.html'  # <app>/<model>_<viewtype>.html
    context_object_name = 'posts'
    ordering = ['-date_posted']
    paginate_by = 5


class UserPostListView(ListView):
    model = Post
    template_name = 'blog/user_posts.html'  # <app>/<model>_<viewtype>.html
    context_object_name = 'posts'
    paginate_by = 5

    def get_queryset(self):
        user = get_object_or_404(User, username=self.kwargs.get('username'))
        return Post.objects.filter(author=user).order_by('-date_posted')


class PostDetailView(DetailView):
    model = Post


class PostCreateView(LoginRequiredMixin, CreateView):
    model = Post
    fields = ['tittle', 'content']

    def form_valid(self, form):
        form.instance.author = self.request.user
        return super().form_valid(form)


class PostUpdateView(LoginRequiredMixin, UserPassesTestMixin, UpdateView):
    model = Post
    fields = ['tittle', 'content']

    def form_valid(self, form):
        form.instance.author = self.request.user
        return super().form_valid(form)

    def test_func(self):
        post = self.get_object()
        if self.request.user == post.author:
            return True
        return False


class PostDeleteView(LoginRequiredMixin, UserPassesTestMixin, DeleteView):
    model = Post
    success_url = '/'

    def test_func(self):
        post = self.get_object()
        if self.request.user == post.author:
            return True
        return False


def about(request):
    return render(request, 'blog/about.html', {'tittle': 'About'})