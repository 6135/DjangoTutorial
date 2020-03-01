from django.shortcuts import render
from django.http import HttpResponse
from .models import *
#from .models import Post

# Create your views here.

def homepage(request):
    return render(request = request,
    template_name='main/index_template.html',
    context = {'products': Product.objects.all, 'Categories': Category.objects.all}
    )

    #test commit