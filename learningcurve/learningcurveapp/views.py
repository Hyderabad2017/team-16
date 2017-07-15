from django.shortcuts import render

# Create your views here.
from django.http import HttpResponse

from django.template import Context, loader
def index(request):
    template=loader.get_template("learningcurveapp/sample.html")
    return HttpResponse(template.render())
    #return render(request,'learningcurveapp/index.html','jfdksjafl')