from django.shortcuts import render
from django.http import HttpResponse
# Create your views here.
def index(request):
    return HttpResponse('<h3>ПРИВЕТ МИР!!!</h3><a href="#">Привет</a>')
