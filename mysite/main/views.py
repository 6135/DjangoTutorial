from django.shortcuts import render
from django.http import HttpResponse
from .models import *
#from .models import Post

# Create your views here.

def login(request):

    return render(request = request,
        template_name='main/login/login_template.html',
        context = {'cart': 1},
        )

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
                "name": "Ola", "href": "#"
                },{
                "name": "Ola2","href": "#"
                },
            ]
        })

def catPage(request, cat_id = None):
    if cat_id != None:
        print("no cat selected\n")
    else:
        print(cat_id)
    return render(request,
        template_name = 'main/index_template.html',
        context = {})