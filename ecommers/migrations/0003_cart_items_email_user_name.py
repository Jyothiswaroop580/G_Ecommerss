# Generated by Django 3.0.8 on 2020-07-29 07:16

from django.db import migrations, models
import django.utils.timezone


class Migration(migrations.Migration):

    dependencies = [
        ('ecommers', '0002_cart_items'),
    ]

    operations = [
        migrations.AddField(
            model_name='cart_items',
            name='email_user_name',
            field=models.TextField(default=django.utils.timezone.now),
            preserve_default=False,
        ),
    ]
