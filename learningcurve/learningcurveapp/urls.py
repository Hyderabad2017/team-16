from django.conf.urls import url

from . import views

urlpatterns = [
    url(r'^home', views.home, name='home'),
    url(r'^adminlogin', views.adminlogin, name='adminlogin'),
    url(r'^teacherlogin', views.teacherlogin, name='teacherlogin'),
    url(r'^studentassessment',views.studentassessment, name='studentassessment'),
    url(r'^finalreport',views.finalreport, name='finalreport')
]