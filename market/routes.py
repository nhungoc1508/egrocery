from market import app
from flask import render_template, redirect, url_for, flash, request
from market.models import Products, User
from market.forms import RegisterForm, LoginForm, PurchaseItemForm
from market import db
from flask_login import login_user, logout_user, login_required, current_user


@app.route('/')
@app.route('/home')
def home_page():
    return render_template('home.html')


@app.route('/market', methods=['GET', 'POST'])
@login_required
def market_page():
    return render_template('market.html')
#     purchase_form = PurchaseItemForm()
#     if request.method == "POST":
#         # Purchase Item Logic
#         purchased_item = request.form.get('purchased_item')
#         p_item_object = Item.query.filter_by(name=purchased_item).first()
#         if p_item_object:
#             p_item_object.buy(current_user)
#             flash(
#                 f"Congratulations! You purchased {p_item_object.name} for {p_item_object.price}$", category='success')
#         return redirect(url_for('market_page'))

#     if request.method == "GET":
#         items = Item.query.filter_by(owner=None)
#         owned_items = Item.query.filter_by(owner=current_user.id)
#         return render_template('market.html', items=items, purchase_form=purchase_form, owned_items=owned_items)


@app.route('/register', methods=['GET', 'POST'])
def register_page():
    form = RegisterForm()
    if form.validate_on_submit():
        user_to_create = User(username=form.username.data,
                              email_address=form.email_address.data,
                              password=form.password1.data)
        db.session.add(user_to_create)
        db.session.commit()
        login_user(user_to_create)
        flash(
            f"Account created! You are now logged in with username {user_to_create.username}", category='success')
        return redirect(url_for('market_page'))
    if form.errors != {}:  # If there are not errors from the validations
        for err_msg in form.errors.values():
            flash(
                f'An error occurred while creating username: {err_msg}', category='danger')

    return render_template('register.html', form=form)


@app.route('/login', methods=['GET', 'POST'])
def login_page():
    form = LoginForm()
    if form.validate_on_submit():
        attempted_user = User.query.filter_by(
            username=form.username.data).first()
        if attempted_user and attempted_user.check_password_correction(
                attempted_password=form.password.data
        ):
            login_user(attempted_user)
            flash(
                f'Log in successful. You are logged in with username: {attempted_user.username}', category='success')
            return redirect(url_for('market_page'))
        else:
            flash('Your credentials do not match. Please try again.',
                  category='danger')

    return render_template('login.html', form=form)


@app.route('/logout')
def logout_page():
    logout_user()
    flash("You have been logged out.", category='info')
    return redirect(url_for("home_page"))

@app.route('/catalog', methods=['GET', 'POST'])
def catalog():
    purchase_form = PurchaseItemForm()
    # if request.method == "POST":
    #     # Purchase Item Logic
    #     purchased_item = request.form.get('purchased_item')
    #     p_item_object = Item.query.filter_by(name=purchased_item).first()
    #     if p_item_object:
    #         p_item_object.buy(current_user)
    #         flash(
    #             f"Congratulations! You purchased {p_item_object.name} for {p_item_object.price}$", category='success')
    #     return redirect(url_for('market_page'))

    if request.method == "GET":
        # items = Products.query.filter_by(id=50)
        items = Products.query.limit(50).all()
        # owned_items = Item.query.filter_by(owner=current_user.id)
        return render_template('catalog.html', items=items, purchase_form=purchase_form)

@app.route('/sandbox')
def sandbox():
    return render_template('sandbox.html')