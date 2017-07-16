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
    print"this is admin"
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
        print "entered"
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


def studentdetails(request):

    aadhar_id = request.POST.get('studentid')
    name = request.POST.get('studentname')
    age = request.POST.get('age')
    parental_status = request.POST.get('familytype')
    siblings = request.POST.get('siblings')
    order_of_birth = request.POST.get('order of birth')
    parent_education_level = request.POST.get('parentedu')
    family_income = request.POST.get('income')
    print aadhar_id
    from .models import Student
    Student.objects.create(aadhar_id=aadhar_id, name=name, age=age, parental_status=parental_status, siblings=siblings,
                           order_of_birth=order_of_birth, parent_education_level=parent_education_level,
                           family_income=family_income)
    template = loader.get_template("learningcurveapp/adminlogin.html")
    return HttpResponse(template.render())

def teacherdetails(request):
    name= request.POST.get('username')
    age=request.POST.get('age')
    address=request.POST.get('address')
    school = request.POST.get('school')
    password=request.POST.get('password')
    from .models import Teacher
    Teacher.objects.create(name=name,age=age,address=address,school=school,password=password)
    template = loader.get_template("learningcurveapp/adminlogin.html")
    return HttpResponse(template.render())

def classroom(request):
    template = loader.get_template("learningcurveapp/classroom_assess.html")
    return HttpResponse(template.render())