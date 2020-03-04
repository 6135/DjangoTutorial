from django.shortcuts import render, redirect
from django.http import HttpResponse, HttpResponseRedirect
from .models import *
from django.urls import *
from .forms import *
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
    if request.method == 'POST':
        form = LogForm(request.POST)
        if form.is_valid():
            return HttpResponseRedirect('/thanks/')
    else:
        form = LogForm()
    return render(request, 'main/login/login_template.html', {'form': form})

def catPage(request, cat_id = None):
    if cat_id != None:
        print("no cat selected\n")
    else:
        print(cat_id)
    return render(request,
        template_name = 'main/index_template.html',
        context = {})