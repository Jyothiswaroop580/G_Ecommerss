from django.urls import path

from . import views

urlpatterns = [
    path('',views.index,name='index'),
    path('AttaFloursSooji/',views.AttaFloursSooji,name='AttaFloursSooji'),
    path('DalsPulses/',views.DalsPulses,name='DalsPulses'),
    path('Rice/',views.rice,name='rice'),
    path('DailyBakery/',views.DailyBakery,name='DailyBakery'),
    path('Staples/',views.staples,name='staples'),
    path('SnacksBranuedFoods/',views.SnacksBranuedFoods,name='SnacksBranuedFoods'),
    path('Vegetables/',views.vegetables,name='vegetables'),
    path('shop/',views.shop,name='shop'),
    path('cart/<slug:id_num>/<slug:user_id>/<int:val>',views.cart,name='cart'),
    path('Login/',views.login,name='login'),
    path('Signup/',views.signup,name='signup'),
    path('Logout/',views.logout,name='logout'),
    path('Team/',views.Team,name='Team'),
    path('Product_details/<slug:id_num>/<slug:user_id>/<int:val>',views.Product_details,name='Product_details')
]