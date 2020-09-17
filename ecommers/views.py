from django.shortcuts import render,redirect
from django.http import HttpResponse
from .models import Atta_Flours_Sooji,Dals_Pulses,Daily_Bakery,Rice,Staples,Snacks_Branued_Foods,Vegetables,cart_items
from django.contrib.auth.models import User,auth
from django.contrib import messages
# Create your views here.
def index(request):
    
    atta_Flours_Sooji = Atta_Flours_Sooji.objects.all()
    dals_Pulses = Dals_Pulses.objects.all()
    daily_Bakery = Daily_Bakery.objects.all()
    staples_ = Staples.objects.all()
    snacks_Branued_Foods = Snacks_Branued_Foods.objects.all()
    vegetables_ = Vegetables.objects.all()
    rice_ = Rice.objects.all()

    '''offer_price=[]

    if i in attaFloursSooji:
        if i.offer_box==1:
            offer_price=append((i.offer_persentage/100)*i.price)
    if i in dals_Pulses:
        if i.offer_box==1:
            offer_price=append((i.offer_persentage/100)*i.price)ok'''
    if User.is_authenticated:
        users = request.user
        user_id = users.id
        try:
            users_s = User.objects.get(id=user_id)
            user_email = users_s.email
            af = cart_items.objects.all().filter(email_user_name=user_email)
            co=0
            for i in af:
                co = co+1
        except:
            co=0
    return  render(request,'index.php',{'Atta_Flours_Sooji' : atta_Flours_Sooji,'DalsPulse' : dals_Pulses,'DailyBakery' : daily_Bakery,'Staples' : staples_,'SnacksBreanuedFoods' : snacks_Branued_Foods,'Vegetables' : vegetables_,'Rice' : rice_,'co':co})

def AttaFloursSooji(request):
    
    atta_Flours_Sooji = Atta_Flours_Sooji.objects.all()
    if User.is_authenticated:
        users = request.user
        user_id = users.id
        try:
            users_s = User.objects.get(id=user_id)
            user_email = users_s.email
            af = cart_items.objects.all().filter(email_user_name=user_email)
            co=0
            for i in af:
                co = co+1
        except:
            co=0

    return render(request,'shop_attaflourssooji.php',{'Atta_Flours_Sooji' : atta_Flours_Sooji,'co':co})

def DalsPulses(request):

    dals_Pulses = Dals_Pulses.objects.all()
    if User.is_authenticated:
        users = request.user
        user_id = users.id
        try:
            users_s = User.objects.get(id=user_id)
            user_email = users_s.email
            af = cart_items.objects.all().filter(email_user_name=user_email)
            co=0
            for i in af:
                co = co+1
        except:
            co=0

    return render(request,'shop_dalspulses.php',{'DalsPulse' : dals_Pulses,'co':co})

def rice(request):

    rice_ = Rice.objects.all()
    if User.is_authenticated:
        users = request.user
        user_id = users.id
        try:
            users_s = User.objects.get(id=user_id)
            user_email = users_s.email
            af = cart_items.objects.all().filter(email_user_name=user_email)
            co=0
            for i in af:
                co = co+1
        except:
            co=0

    return render(request,'shop_rice.php',{'Rice' : rice_,'co':co})

def DailyBakery(request):

    daily_Bakery = Daily_Bakery.objects.all()
    if User.is_authenticated:
        users = request.user
        user_id = users.id
        try:
            users_s = User.objects.get(id=user_id)
            user_email = users_s.email
            af = cart_items.objects.all().filter(email_user_name=user_email)
            co=0
            for i in af:
                co = co+1
        except:
            co=0

    return render(request,'shop_dailybakery.php',{'DailyBakery' : daily_Bakery,'co':co})

def staples(request):

    staples_ = Staples.objects.all()
    if User.is_authenticated:
        users = request.user
        user_id = users.id
        try:
            users_s = User.objects.get(id=user_id)
            user_email = users_s.email
            af = cart_items.objects.all().filter(email_user_name=user_email)
            co=0
            for i in af:
                co = co+1
        except:
            co=0
    return render(request,'shop_staples.php',{'Staples' : staples_,'co':co})

def SnacksBranuedFoods(request):

    snacks_Branued_Foods = Snacks_Branued_Foods.objects.all()
    if User.is_authenticated:
        users = request.user
        user_id = users.id
        try:
            users_s = User.objects.get(id=user_id)
            user_email = users_s.email
            af = cart_items.objects.all().filter(email_user_name=user_email)
            co=0
            for i in af:
                co = co+1
        except:
            co=0

    return render(request,'shop_snacksbranuedfoods.php',{'SnacksBreanuedFoods' : snacks_Branued_Foods,'co':co})

def vegetables(request):

    vegetables_ = Vegetables.objects.all()
    if User.is_authenticated:
        users = request.user
        user_id = users.id
        try:
            users_s = User.objects.get(id=user_id)
            user_email = users_s.email
            af = cart_items.objects.all().filter(email_user_name=user_email)
            co=0
            for i in af:
                co = co+1
        except:
            co=0

    return render(request,'shop_vegetables.php',{'Vegetables' : vegetables_,'co':co})    

def shop(request):

    atta_Flours_Sooji = Atta_Flours_Sooji.objects.all()
    dals_Pulses = Dals_Pulses.objects.all()
    daily_Bakery = Daily_Bakery.objects.all()
    staples_ = Staples.objects.all()
    snacks_Branued_Foods = Snacks_Branued_Foods.objects.all()
    vegetables_ = Vegetables.objects.all()
    rice_ = Rice.objects.all()
    if User.is_authenticated:
        users = request.user
        user_id = users.id
        try:
            users_s = User.objects.get(id=user_id)
            user_email = users_s.email
            af = cart_items.objects.all().filter(email_user_name=user_email)
            co=0
            for i in af:
                co = co+1
        except:
            co=0

    return render(request,'shop.php',{'Atta_Flours_Sooji' : atta_Flours_Sooji,'DalsPulse' : dals_Pulses,'DailyBakery' : daily_Bakery,'Staples' : staples_,'SnacksBreanuedFoods' : snacks_Branued_Foods,'Vegetables' : vegetables_,'Rice' : rice_,'co':co})

def cart(request,id_num,user_id,val):
    count=1
    discount=2.00
    value=0.00
    Total=0.00
    co=0
    if request.method == 'POST':
        try:
            user = User.objects.get(id=user_id)
        except:
            return redirect('index')
        user_email = user.email
        af = cart_items.objects.all().filter(email_user_name=user_email)
        count = int(request.POST['quantity1'])
        update_item_quantity = af.get(id=id_num)
        update_item_quantity.quantity = count
        update_item_quantity.save()
        value=0
        co=0
        for i in af:
            value = value+(i.price*count)
            co = co+1
        Total=value+discount
    elif id_num == '-':
        try:
            user = User.objects.get(id=user_id)
            user_email = user.email
            af = cart_items.objects.all().filter(email_user_name=user_email)
            co=0
            for i in af:
                    value = value+(i.price*count)
                    co = co+1
            Total=value+discount
        except:
            return redirect('login')
    elif User.is_authenticated:
        try:
            user = User.objects.get(id=user_id)
        except:
            return render(request,'Login.php')
        user_email = user.email
        count=0
        if val == 1:
            user = User.objects.get(id=user_id)
            user_email = user.email
            attaFloursSooji = Atta_Flours_Sooji.objects.get(id=id_num)
            val = cart_items.objects.filter(email_user_name=user_email, name=attaFloursSooji.name).exists()
            if val == True:
                user = User.objects.get(id=user_id)
                user_email = user.email
                af = cart_items.objects.all().filter(email_user_name=user_email)
                co=0
                for i in af:
                    value = value+(i.price*count)
                    co = co+1
                Total=value+discount
            else:
                value=0
                count=1
                attaFloursSooji = Atta_Flours_Sooji.objects.get(id=id_num)
                add_item_to_cart = cart_items(name=attaFloursSooji.name,img=attaFloursSooji.img,price=attaFloursSooji.price,email_user_name=user_email,quantity=1)
                add_item_to_cart.save()
                af = cart_items.objects.all().filter(email_user_name=user_email)
                co=0
                for i in af:
                    co = co+1
                    value = value+(i.price*count)
                Total=value+discount
        elif val == 2:
            user = User.objects.get(id=user_id)
            user_email = user.email
            dals_Pulses = Dals_Pulses.objects.get(id=id_num)
            val = cart_items.objects.filter(email_user_name=user_email, name=dals_Pulses.name).exists()
            if val == True:
                user = User.objects.get(id=user_id)
                user_email = user.email
                af = cart_items.objects.all().filter(email_user_name=user_email)
                co=0
                for i in af:
                    value = value+(i.price*count)
                    co = co+1
                Total=value+discount
            else:
                value=0
                count=1
                dals_Pulses = Dals_Pulses.objects.get(id=id_num)
                add_item_to_cart = cart_items(name=dals_Pulses.name,img=dals_Pulses.img,price=dals_Pulses.price,email_user_name=user_email,quantity=1)
                add_item_to_cart.save()
                af = cart_items.objects.all().filter(email_user_name=user_email)
                co=0
                for i in af:
                    value = value+(i.price*count)
                    co = co+1
                Total=value+discount
        elif val == 3:
            user = User.objects.get(id=user_id)
            user_email = user.email
            daily_Bakery = Daily_Bakery.objects.get(id=id_num)
            val = cart_items.objects.filter(email_user_name=user_email, name=daily_Bakery.name).exists()
            if val == True:
                user = User.objects.get(id=user_id)
                user_email = user.email
                af = cart_items.objects.all().filter(email_user_name=user_email)
                co=0
                for i in af:
                    value = value+(i.price*count)
                    co = co+1
                Total=value+discount
            else:
                value=0
                count=1
                daily_Bakery = Daily_Bakery.objects.get(id=id_num)
                add_item_to_cart = cart_items(name=daily_Bakery.name,img=daily_Bakery.img,price=daily_Bakery.price,email_user_name=user_email,quantity=1)
                add_item_to_cart.save()
                af = cart_items.objects.all().filter(email_user_name=user_email)
                co=0
                for i in af:
                    value = value+(i.price*count)
                    co = co+1
                Total=value+discount
        elif val == 4:
            user = User.objects.get(id=user_id)
            user_email = user.email
            staples_ = Staples.objects.get(id=id_num)
            val = cart_items.objects.filter(email_user_name=user_email, name=staples_.name).exists()
            if val == True:
                user = User.objects.get(id=user_id)
                user_email = user.email
                af = cart_items.objects.all().filter(email_user_name=user_email)
                co=0
                for i in af:
                    value = value+(i.price*count)
                    co = co+1
                Total=value+discount
            else:
                value=0
                count=1
                staples_ = Staples.objects.get(id=id_num)
                add_item_to_cart = cart_items(name=staples_.name,img=staples_.img,price=staples_.price,email_user_name=user_email,quantity=1)
                add_item_to_cart.save()
                af = cart_items.objects.all().filter(email_user_name=user_email)
                co=0
                for i in af:
                    value = value+(i.price*count)
                    co = co+1
                Total=value+discount
        elif val == 5:
            user = User.objects.get(id=user_id)
            user_email = user.email
            snacks_Branued_Foods = Snacks_Branued_Foods.objects.get(id=id_num)
            val = cart_items.objects.filter(email_user_name=user_email, name=snacks_Branued_Foods.name).exists()
            if val == True:
                user = User.objects.get(id=user_id)
                user_email = user.email
                af = cart_items.objects.all().filter(email_user_name=user_email)
                co=0
                for i in af:
                    value = value+(i.price*count)
                    co = co+1
                Total=value+discount
            else:
                value=0
                count=1
                snacks_Branued_Foods = Snacks_Branued_Foods.objects.get(id=id_num)
                add_item_to_cart = cart_items(name=snacks_Branued_Foods.name,img=snacks_Branued_Foods.img,price=snacks_Branued_Foods.price,email_user_name=user_email,quantity=1)
                add_item_to_cart.save()
                af = cart_items.objects.all().filter(email_user_name=user_email)
                co=0
                for i in af:
                    value = value+(i.price*count)
                    co = co+1
                Total=value+discount
        elif val == 6:
            user = User.objects.get(id=user_id)
            user_email = user.email
            vegetables_ = Vegetables.objects.get(id=id_num)
            val = cart_items.objects.filter(email_user_name=user_email, name=vegetables_.name).exists()
            if val == True:
                user = User.objects.get(id=user_id)
                user_email = user.email
                af = cart_items.objects.all().filter(email_user_name=user_email)
                co=0
                for i in af:
                    value = value+(i.price*count)
                    co = co+1
                Total=value+discount
            else:
                value=0
                count=1
                vegetables_ = Vegetables.objects.get(id=id_num)
                add_item_to_cart = cart_items(name=vegetables_.name,img=vegetables_.img,price=vegetables_.price,email_user_name=user_email,quantity=1)
                add_item_to_cart.save()
                af = cart_items.objects.all().filter(email_user_name=user_email)
                co=0
                for i in af:
                    value = value+(i.price*count)
                    co = co+1
                Total=value+discount
        elif val == 7:
            user = User.objects.get(id=user_id)
            user_email = user.email
            rice_ = Rice.objects.get(id=id_num)
            val = cart_items.objects.filter(email_user_name=user_email, name=rice_.name).exists()
            if val == True:
                user = User.objects.get(id=user_id)
                user_email = user.email
                af = cart_items.objects.all().filter(email_user_name=user_email)
                co=0
                for i in af:
                    value = value+(i.price*count)
                    co = co+1
                Total=value+discount
            else:
                value=0
                count=1
                rice_ = Rice.objects.get(id=id_num)
                add_item_to_cart = cart_items(name=rice_.name,img=rice_.img,price=rice_.price,email_user_name=user_email,quantity=1)
                add_item_to_cart.save()
                af = cart_items.objects.all().filter(email_user_name=user_email)
                co=0
                for i in af:
                    value = value+(i.price*count)
                    co = co+1
                Total=value+discount
        elif val==10:
            user = User.objects.get(id=user_id)
            user_email = user.email
            delete_val = cart_items.objects.get(id=id_num)
            delete_val.delete()
            af = cart_items.objects.all().filter(email_user_name=user_email)
            co=0
            for i in af:
                value = value+(i.price*count)
                co = co+1
            Total=value+discount
        
    
    return render(request,'cart.php',{'afs':af,'count':count,'value':value,'discount':discount,'Total':Total,'co':co})

        


def logout(request):
    auth.logout(request)
    return redirect('/')

def login(request):
    if request.method == 'POST':
        log = request.POST['email']
        pas = request.POST['password']
        try:
            user = auth.authenticate(username=User.objects.get(email=log),password=pas)
            if user is not None:
                auth.login(request,user)
                return redirect('index')
            else:
                messages.info(request,'Invalid cresentials')
                return redirect('login')
        except:
            messages.info(request,'Invalid cresentials')
            return redirect('login')
    return render(request,'Login.php')

def signup(request):

    if request.method == 'POST':
        nam = request.POST['name']
        first_nam = request.POST['firstname']
        last_nam = request.POST['lastname']
        ema = request.POST['email']
        pas = request.POST['password']
        re_pas = request.POST['re_password']

        user = User.objects.create_user(username=nam,email=ema,password=pas,first_name=first_nam,last_name=last_nam)
        user.save()
        print('user created')
        return redirect('login')
    return render(request,'Signup.php')

def Team(request):
    return render(request,'Team.php')

def Product_details(request,id_num,user_id,val):
    if val==1:
        item_details = Atta_Flours_Sooji.objects.get(id=id_num)
    elif val==2:
        item_details = Dals_Pulses.objects.get(id=id_num)
    elif val==3:
        item_details = Daily_Bakery.objects.get(id=id_num)
    elif val==4:
        item_details = Staples.objects.get(id=id_num)
    elif val==5:
        item_details = Snacks_Branued_Foods.objects.get(id=id_num)
    elif val==6:
        item_details = Vegetables.objects.get(id=id_num)
    elif val==7:
        item_details = Rice.objects.get(id=id_num)
    if User.is_authenticated:
        users = request.user
        user_id = users.id
        try:
            users_s = User.objects.get(id=user_id)
            user_email = users_s.email
            af = cart_items.objects.all().filter(email_user_name=user_email)
            co=0
            for i in af:
                co = co+1
        except:
            co=0
    return render(request,'Product_info.html',{'item' : item_details,'co' : co})
    def Search(request,name):
        product_name = Atta_Flours_Sooji.objects.filter(name__unaccent__lower__trigram_similar=name)