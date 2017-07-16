from django.conf.urls import url

from . import views

urlpatterns = [
    url(r'^home', views.home, name='home'),
    url(r'^adminlogin', views.adminlogin, name='adminlogin'),
    url(r'^teacherlogin', views.teacherlogin, name='teacherlogin'),
    url(r'^teacherdetails', views.teacherdetails, name='teacherdetails')
    url(r'^studentassessment',views.studentassessment, name='studentassessment'),
    url(r'^studentdetails',views.studentdetails, name='studentdetails'),
    url(r'^finalreport', views.finalreport, name='finalreport'),
    url(r'^teacherdetails',views.teacher_details,name='teacher_details')
]