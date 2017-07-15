from django.db import models


class Student(models.Model):
    CHOICES=(
        ('Both Parents','Both Parents'),
        ('Single Parent','Single Parent'),
        ('Orphan','Orphan')
    )
    FAMILY_CHOICES=(
        ('Joint','Joint'),
        ('Nuclear','Nuclear')
    )
    EDUCATION_CHOICES=(
        ('Primary','Primary'),
        ('Secondary','Secondary'),
        ('Higher Secondary','Higher Secondary'),
        ('None','None')
    )
    aadhar_id = models.IntegerField(unique=True)
    name = models.CharField(max_length=50)
    age = models.IntegerField()
    parental_status=models.CharField(max_length=20,choices=CHOICES)
    family_type=models.CharField(max_length=20,choices=FAMILY_CHOICES)
    siblings=models.IntegerField()
    order_of_birth=models.CharField(max_length=30)
    parent_education_level=models.CharField(max_length=20,choices=EDUCATION_CHOICES)
    family_income=models.FloatField()