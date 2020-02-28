from django.db import models
from datetime import datetime

# Create your models here.

class Post(models.Model):
    test_title = models.CharField(max_length=200)
    test_content = models.TextField()
    test_published = models.DateTimeField('published at', default=datetime.now)

    def __str__(self):
        return self.test_title
        
    
    