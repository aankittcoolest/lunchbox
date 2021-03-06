{% extends 'templates/default.php' %}

{% block title %}Registet{% endblock %}

{% block content %}

<div class="col-md-12">
    <div class="modal-dialog" style="margin-bottom:0">
        <div class="modal-content">
                    <div class="panel-heading">

                              <h3 class="panel-title"><div class="form-headings">{{ lang.headings.register }}</div></h3>

                    </div>
                    <div class="panel-body">
                        <form action="{{ urlFor('register.post') }}" method="post" autocomplete="off">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="{{ lang.placeholders.email }}" type="text" name="email" id="email" {% if request.post('email') %}value="{{ request.post('email') }}"{% endif %}>
                                    <h4>  {% if errors.has('email') %} {{ errors.first('email') }} {% endif %}</h4>
                                </div>


                                <div class="form-group">
                                    <input class="form-control" placeholder="{{ lang.placeholders.username }}" type="text" name="username" id="username" {% if request.post('username') %}value="{{ request.post('username') }}"{% endif %}>
                                    <h4>  {% if errors.has('username') %} {{ errors.first('username') }} {% endif %}</h4>
                                </div>

                                <div class="form-group">
                                    <input class="form-control" placeholder="{{ lang.placeholders.password }}" type="password" name="password" id="password">
                                    <h4>  {% if errors.has('password') %} {{ errors.first('password') }} {% endif %}</h4>
                                </div>


                                <div class="form-group">
                                    <input class="form-control" placeholder="{{ lang.placeholders.confirm_password }}" type="password" name="password_confirm" id="password_confirm">
                                    <h4>  {% if errors.has('password_confirm') %} {{ errors.first('password_confirm') }} {% endif %}</h4>
                                </div>

                                <input type="hidden" name="{{ csrf_key }}" value="{{ csrf_token }}">
                                <input class="btn btn-sm btn-success" type="submit"  value="{{ lang.submit.register }}">

                            </fieldset>
                        </form>
                    </div>
                </div>
    </div>
</div>


{% endblock %}
