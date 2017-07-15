from django.conf.urls import url

from . import views

urlpatterns = [
    url(r'^view1', views.index, name='index'),
    url(r'^view2', views.adminlogin, name='adminlogin'),
    url(r'^view3', views.classassessment, name='classassessment'),
]