# -*- coding: utf-8 -*-
# Generated by Django 1.10.5 on 2017-07-15 21:50
from __future__ import unicode_literals

from django.db import migrations, models


class Migration(migrations.Migration):

    dependencies = [
        ('learningcurveapp', '0001_initial'),
    ]

    operations = [
        migrations.AddField(
            model_name='studentassessment',
            name='student_id',
            field=models.IntegerField(default=1),
            preserve_default=False,
        ),
    ]