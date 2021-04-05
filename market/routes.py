from market import app
from flask import render_template, redirect, url_for, flash, request
from market.models import Products_new, User
from market.forms import RegisterForm, LoginForm, PurchaseItemForm
from market import db
from flask_login import login_user, logout_user, login_required, current_user

from market.mockdata import *

@app.route('/')
@app.route('/home')
def home_page():
    return render_template('home.html')

@app.route('/admin')
def admin_page():
    return render_template('admin.html')

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
        return redirect(url_for('catalog'))
    if form.errors != {}:
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
            return redirect(url_for('catalog'))
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
@login_required
def catalog():
    purchase_form = PurchaseItemForm()

    if request.method == "GET":
        items = Products_new.query.limit(100).all()
        # for item in items:
        #     if item.img == None:
        #         img_url, img_color = add_images(item.kind)
        #         item.update_img(img_url)
        #         item.update_color(img_color)
        return render_template('catalog.html', items=items, purchase_form=purchase_form)