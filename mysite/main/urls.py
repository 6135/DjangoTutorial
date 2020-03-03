from django.urls import path, re_path
from . import views

app_name = 'main' # here for namespacing of urls.

urlpatterns = [
    path('login/',views.login, name='login'),
    path('', views.homepage, name='homepage'),
    re_path(r'^cat/(?P<cat_id>[0-9]{1,9})/$', views.catPage, name='cat'),
    
]
