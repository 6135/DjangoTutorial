from django.shortcuts import render, redirect
from django.http import HttpResponse
from .models import *
from django.urls import *

#from .models import Post
# Create your views here.

def homepage(request):
    cart = True
    return render(request = request,
        template_name='main/index_template.html',
        context = {
            'cart': cart,
            'cartM': {"name": "Cart", "href": "#"},
            'products': Product.objects.all, 
            'Categories': Category.objects.all,
            'Menus': [{
                "name": "Login", "href": reverse('main:login')
                },{
                "name": "Register","href": "#"
                },
            ]
        })

def login(request):

    return render(request = request,
        template_name='main/login/login_template.html',
        context = {},
        )

def catPage(request, cat_id = None):
    if cat_id != None:
        print("no cat selected\n")
    else:
        print(cat_id)
    return render(request,
        template_name = 'main/index_template.html',
        context = {})