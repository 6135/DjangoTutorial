# This is an auto-generated Django model module.
# You'll have to do the following manually to clean this up:
#   * Rearrange models' order
#   * Make sure each model has one field with primary_key=True
#   * Make sure each ForeignKey and OneToOneField has `on_delete` set to the desired behavior
#   * Remove `managed = False` lines if you wish to allow Django to create, modify, and delete the table
# Feel free to rename the models, but don't rename db_table values or field names.
from django.db import models


class Category(models.Model):
    name = models.CharField(max_length=255, blank=True, null=True)
    description = models.CharField(max_length=255, blank=True, null=True)
    image = models.CharField(max_length=255, blank=True, null=True)


class Customer(models.Model):
    name = models.CharField(max_length=255, blank=True, null=True)
    email = models.CharField(unique=True, max_length=255, blank=True, null=True)
    created_at = models.DateTimeField()
    updated_at = models.DateTimeField()
    password_digest = models.CharField(max_length=255, blank=True, null=True)
    remember_digest = models.CharField(max_length=255, blank=True, null=True)
    admin = models.IntegerField(blank=True, null=True)
    activation_digest = models.CharField(max_length=255, blank=True, null=True)
    activated = models.IntegerField(blank=True, null=True)
    activated_at = models.DateTimeField(blank=True, null=True)
    reset_digest = models.CharField(max_length=255, blank=True, null=True)
    reset_sent_at = models.DateTimeField(blank=True, null=True)




class OrderItem(models.Model):
    order = models.ForeignKey('Order', models.DO_NOTHING)
    product = models.ForeignKey('Product', models.DO_NOTHING)
    quantity = models.IntegerField(blank=True, null=True)




class Order(models.Model):
    customer = models.ForeignKey(Customer, models.DO_NOTHING)
    created_at = models.DateTimeField()
    status = models.IntegerField(blank=True, null=True)
    total = models.IntegerField(blank=True, null=True)




class Product(models.Model):
    cat = models.ForeignKey(Category, models.DO_NOTHING)
    name = models.CharField(max_length=255, blank=True, null=True)
    description = models.CharField(max_length=255, blank=True, null=True)
    price = models.IntegerField(blank=True, null=True)
    image = models.CharField(max_length=255, blank=True, null=True)


