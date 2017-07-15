from __future__ import unicode_literals

from django.db import models


class Login(models.Model):
    username = models.CharField(max_length=20)
    password = models.CharField(max_length=20)

    class Meta():
        unique_together = (("username", "password"))


class Student(models.Model):
    CHOICES = (
        ('Both Parents', 'Both Parents'),
        ('Single Parent', 'Single Parent'),
        ('Orphan', 'Orphan')
    )
    FAMILY_CHOICES = (
        ('Joint', 'Joint'),
        ('Nuclear', 'Nuclear')
    )
    EDUCATION_CHOICES = (
        ('Primary', 'Primary'),
        ('Secondary', 'Secondary'),
        ('Higher Secondary', 'Higher Secondary'),
        ('None', 'None')
    )
    ORDER_CHOICES = (
        ('First Born', 'First Born'),
        ('Second Born', 'Second Born'),
        ('Last Born', 'Last Born'),
    )
    aadhar_id = models.IntegerField(unique=True)
    name = models.CharField(max_length=50)
    age = models.IntegerField()
    parental_status = models.CharField(max_length=20, choices=CHOICES)
    family_type = models.CharField(max_length=20, choices=FAMILY_CHOICES)
    siblings = models.IntegerField()
    order_of_birth = models.CharField(max_length=30, choices=ORDER_CHOICES)
    parent_education_level = models.CharField(max_length=20, choices=EDUCATION_CHOICES)
    family_income = models.FloatField()

    def __unicode__(self):
        return unicode(self.aadhar_id)


# class School(models.Model):
#     class_level = models.IntegerField(unique=True)
#     teacher = models.ForeignKey()


class Teacher(models.Model):
    CHOICES = (
        ('Male', 'Male'),
        ('Female', 'Female')
    )
    name = models.CharField(max_length=30)
    aadhar_id = models.IntegerField()
    age = models.IntegerField()
    gender = models.CharField(max_length=25, choices=CHOICES)
    student = models.ForeignKey(Student)

    def __unicode__(self):
        return unicode(self.name)


# class SchoolStudent(models.Model):
#     school = models.ForeignKey(School)
#     student = models.ForeignKey(Student)
#
#
# class TeacherStudent(models.Model):
#     teacher_aadhar_id = models.IntegerField()
#     students = models.ForeignKey(Student)
#
#
# class Master(models.Model):
#     name = models.CharField()
#     schools = models.ForeignKey()
class School(models.Model):
    name = models.CharField(max_length=30)
    class_level = models.IntegerField()


class Master(models.Model):
    CHOICES = (
        ('Male', 'Male'),
        ('Female', 'Female')
    )
    name = models.CharField(max_length=30)
    age = models.IntegerField()
    gender = models.CharField(max_length=20, choices=CHOICES)
    schools = models.ForeignKey(School)

    def __unicode__(self):
        return unicode(self.name)


class TeacherStudent(models.Model):
    teacher = models.ForeignKey(Teacher)
    student = models.ForeignKey(Student)

    class Meta():
        unique_together = (("teacher", "student"))


class StudentAssessment(models.Model):
    student_id = models.IntegerField()
    q1 = models.IntegerField()
    q2 = models.IntegerField()
    q3 = models.IntegerField()
    q4 = models.IntegerField()
    q5 = models.IntegerField()
    q6 = models.IntegerField()

