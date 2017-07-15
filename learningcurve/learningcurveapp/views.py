from django.shortcuts import render

# Create your views here.
from django.http import HttpResponse

from django.template import Context, loader

from .models import Login


def home(request):
    template = loader.get_template("learningcurveapp/home.html")
    return HttpResponse(template.render())


def adminlogin(request):
    username = request.POST.get('username')
    password = request.POST.get('password')
    print username, password
    count = Login.objects.filter(username=username, password=password).count()
    print count
    if count == 1:
        template = loader.get_template("learningcurveapp/adminlogin.html")
    else:
        template = loader.get_template("learningcurveapp/homepage.html")
    return HttpResponse(template.render())


def teacherlogin(request):
    username = request.POST.get('username')
    password = request.POST.get('password')
    count = Login.objects.filter(username=username, password=password).count()
    print count
    if count == 1:
        template = loader.get_template("learningcurveapp/teacherhome.html")
    else:
        template = loader.get_template("learningcurveapp/homepage.html")
    return HttpResponse(template.render())


def studentassessment(request):
    id = request.POST.get('id')
    print id
    from .models import StudentAssessment
    student_assessment_object = StudentAssessment.objects.filter(student_id=id)
    response = []
    for student_object in student_assessment_object:
        data = [student_object.q1,
                student_object.q2,
                student_object.q3,
                student_object.q4,
                student_object.q5,
                student_object.q6,
                ]
        response.append(data)
    template = loader.get_template("learningcurveapp/homepage.html")
    return HttpResponse(template.render())


def finalreport(request):
    template = loader.get_template("learningcurveapp/studentfinalreport.html")
    return HttpResponse(template.render())
