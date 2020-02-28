from django.contrib import admin
from .models import Post
from tinymce.widgets import TinyMCE
from django.db import models

# Register your models here.



class TestAdmin(admin.ModelAdmin):
    fieldsets = [
        ("Title and Date", {'fields': ["test_title","test_published"]}),
        ("Content", {"fields": ["test_content"]})
    ]

    formfield_overrides = {
        models.TextField: {'widget': TinyMCE()},
    }

admin.site.register(Post,TestAdmin)