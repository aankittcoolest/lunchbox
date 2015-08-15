{% extends 'templates/default.php' %}

{% block title %} Create new Menu {% endblock %}

{% block content %}




<div class="col-md-12">
    <div class="modal-dialog" style="margin-bottom:0">
        <div class="modal-content">
                    <div class="panel-heading">
                        <h3 class="panel-title">Create New Menu</h3>
                    </div>
                    <div class="panel-body">
                        <form class="" action="{{ urlFor('new_menu.post') }}" method="post" enctype="multipart/form-data">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Menu Name" name="menu_name"  type="text" id="menu_name" autofocus="">
                                    <h4>{% if errors.has('menu_name')%}{{ errors.first('menu_name') }}{% endif %}</h4>
                                </div>
                                <div class="form-group">


                                  <span class="btn btn-default btn-file"><div class="image-label">
                                    <span class="label label-info">Upload the Menu image.</span>
                                  </div><input class="form-control"  type="file" name="file"></span>

                                      <h4>{% if errors.has('file') %}{{ errors.first('file') }}{% endif %}</h4>
                                </div>

                                <input type="hidden" name="{{ csrf_key }}" value="{{ csrf_token }}">

                                <input class="btn btn-sm btn-success" type="submit"  value="Submit">


                            </fieldset>
                        </form>
                    </div>
                </div>
    </div>
</div>


{% endblock %}
