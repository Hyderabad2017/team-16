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
    print username,password
    count = Login.objects.filter(username=username, password=password).count()
    print count
    if count ==1:
        template = loader.get_template("learningcurveapp/adminlogin.html")
    else:
        template = loader.get_template("learningcurveapp/homepage.html")
    return HttpResponse(template.render())

def teacherlogin(request):
    username = request.POST.get('username')
    password = request.POST.get('password')
    count=Login.objects.filter(username=username, password=password).count()
    print count
    if count==1:
        template = loader.get_template("learningcurveapp/teacherhome.html")
    else:
        template = loader.get_template("learningcurveapp/homepage.html")
    return HttpResponse(template.render())

def studentassessment(request):
    id=request.POST.get('student_id')
    from .models import StudentAssessment
    student_assessment_object=StudentAssessment.objects.get(id=id)
    return [
        student_assessment_object.q1,
        student_assessment_object.q2,
        student_assessment_object.q3,
        student_assessment_object.q4,
        student_assessment_object.q5,
        student_assessment_object.q6
    ]


