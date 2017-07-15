from django.db import models

class Student(models.Model):
    aadhar_id=models.IntegerField(unique=True)
    name=models.CharField(max_length=50)
    age=models.IntegerField()
