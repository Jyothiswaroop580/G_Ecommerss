from django.db import models

# Create your models here.
class Atta_Flours_Sooji(models.Model):
    name = models.TextField() 
    img = models.ImageField(upload_to='pics')   
    price = models.IntegerField()
    offer_persentage = models.IntegerField()
    offer_box = models.BooleanField(default=False)

class Dals_Pulses(models.Model):
    name = models.TextField() 
    img = models.ImageField(upload_to='pics')
    price = models.IntegerField()
    offer_persentage = models.IntegerField()
    offer_box = models.BooleanField(default=False)

class Rice(models.Model):
    name = models.TextField() 
    img = models.ImageField(upload_to='pics')
    price = models.IntegerField()
    offer_persentage = models.IntegerField()
    offer_box = models.BooleanField(default=False)

class Vegetables(models.Model):
    name = models.TextField() 
    img = models.ImageField(upload_to='pics')
    price = models.IntegerField()
    offer_persentage = models.IntegerField()
    offer_box = models.BooleanField(default=False)

class Daily_Bakery(models.Model):
    name = models.TextField() 
    img = models.ImageField(upload_to='pics')
    price = models.IntegerField()
    offer_persentage = models.IntegerField()
    offer_box = models.BooleanField(default=False)

class Staples(models.Model):
    name = models.TextField() 
    img = models.ImageField(upload_to='pics')
    price = models.IntegerField()
    offer_persentage = models.IntegerField()
    offer_box = models.BooleanField(default=False)

class Snacks_Branued_Foods(models.Model):
    name = models.TextField() 
    img = models.ImageField(upload_to='pics')
    price = models.IntegerField()
    offer_persentage = models.IntegerField()
    offer_box = models.BooleanField(default=False)

class cart_items(models.Model):
    name = models.TextField() 
    img = models.ImageField(upload_to='pics')
    price = models.IntegerField()
    email_user_name = models.TextField()
    quantity = models.IntegerField()
