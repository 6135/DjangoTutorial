from django import forms

class LogForm(forms.Form):
    email = forms.EmailField()
    passwod = forms.CharField(label="Email",widget=forms.PasswordInput())