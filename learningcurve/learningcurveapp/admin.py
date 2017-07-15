from django.contrib import admin

# Register your models here.
from .models import Student,Teacher,Master,Login,StudentAssessment

admin.site.register(Student)
admin.site.register(Teacher)
admin.site.register(Master)
admin.site.register(Login)
admin.site.register(StudentAssessment)