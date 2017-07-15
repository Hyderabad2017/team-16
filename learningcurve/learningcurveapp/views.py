from django.shortcuts import render

# Create your views here.
from django.http import HttpResponse

from django.template import Context, loader


def index(request):
    template = loader.get_template("learningcurveapp/adminlogin.html")
    return HttpResponse(template.render())


def adminlogin(request):
    username = request.GET.get('username')
    password = request.GET.get('password')
    from learningcurveapp.models import Login
    Login.objects.filter(username=username, password=password)
    template = loader.get_template("learningcurveapp/adminlogin.html")
    return HttpResponse(template.render())


def classassessment(request):
    template = loader.get_template("learningcurveapp/classroom_assess.html")
    return HttpResponse()
