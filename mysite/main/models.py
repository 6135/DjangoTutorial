from django.db import models

# Create your models here.

class Test(models.Model):
    test_title = models.CharField(max_length=200)
    test_content = models.TextField()
    test_published = models.DateTimeField('published at')

    def __str__(self):
        return self.test_title
        
    