<?php

/* form_div_layout.html.twig */
class __TwigTemplate_7b19c092266fecaf2c9e0dddbf68c3d98fb44f34a7ae317015dbd54b06cff5df extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'form_widget' => array($this, 'block_form_widget'),
            'form_widget_simple' => array($this, 'block_form_widget_simple'),
            'form_widget_compound' => array($this, 'block_form_widget_compound'),
            'collection_widget' => array($this, 'block_collection_widget'),
            'textarea_widget' => array($this, 'block_textarea_widget'),
            'choice_widget' => array($this, 'block_choice_widget'),
            'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
            'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
            'choice_widget_options' => array($this, 'block_choice_widget_options'),
            'checkbox_widget' => array($this, 'block_checkbox_widget'),
            'radio_widget' => array($this, 'block_radio_widget'),
            'datetime_widget' => array($this, 'block_datetime_widget'),
            'date_widget' => array($this, 'block_date_widget'),
            'time_widget' => array($this, 'block_time_widget'),
            'dateinterval_widget' => array($this, 'block_dateinterval_widget'),
            'number_widget' => array($this, 'block_number_widget'),
            'integer_widget' => array($this, 'block_integer_widget'),
            'money_widget' => array($this, 'block_money_widget'),
            'url_widget' => array($this, 'block_url_widget'),
            'search_widget' => array($this, 'block_search_widget'),
            'percent_widget' => array($this, 'block_percent_widget'),
            'password_widget' => array($this, 'block_password_widget'),
            'hidden_widget' => array($this, 'block_hidden_widget'),
            'email_widget' => array($this, 'block_email_widget'),
            'range_widget' => array($this, 'block_range_widget'),
            'button_widget' => array($this, 'block_button_widget'),
            'submit_widget' => array($this, 'block_submit_widget'),
            'reset_widget' => array($this, 'block_reset_widget'),
            'tel_widget' => array($this, 'block_tel_widget'),
            'color_widget' => array($this, 'block_color_widget'),
            'form_label' => array($this, 'block_form_label'),
            'button_label' => array($this, 'block_button_label'),
            'repeated_row' => array($this, 'block_repeated_row'),
            'form_row' => array($this, 'block_form_row'),
            'button_row' => array($this, 'block_button_row'),
            'hidden_row' => array($this, 'block_hidden_row'),
            'form' => array($this, 'block_form'),
            'form_start' => array($this, 'block_form_start'),
            'form_end' => array($this, 'block_form_end'),
            'form_errors' => array($this, 'block_form_errors'),
            'form_rest' => array($this, 'block_form_rest'),
            'form_rows' => array($this, 'block_form_rows'),
            'widget_attributes' => array($this, 'block_widget_attributes'),
            'widget_container_attributes' => array($this, 'block_widget_container_attributes'),
            'button_attributes' => array($this, 'block_button_attributes'),
            'attributes' => array($this, 'block_attributes'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d8d6785825d91d867754bac8cb1da25a1c6ee1f58804c50d88c9493c276e52a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d8d6785825d91d867754bac8cb1da25a1c6ee1f58804c50d88c9493c276e52a6->enter($__internal_d8d6785825d91d867754bac8cb1da25a1c6ee1f58804c50d88c9493c276e52a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_div_layout.html.twig"));

        $__internal_dd1a102a071ddf66fdde521709e431cbffcc147ca35f45ad5dcb23af45ad8ef5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd1a102a071ddf66fdde521709e431cbffcc147ca35f45ad5dcb23af45ad8ef5->enter($__internal_dd1a102a071ddf66fdde521709e431cbffcc147ca35f45ad5dcb23af45ad8ef5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_div_layout.html.twig"));

        // line 3
        $this->displayBlock('form_widget', $context, $blocks);
        // line 11
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 16
        $this->displayBlock('form_widget_compound', $context, $blocks);
        // line 26
        $this->displayBlock('collection_widget', $context, $blocks);
        // line 33
        $this->displayBlock('textarea_widget', $context, $blocks);
        // line 37
        $this->displayBlock('choice_widget', $context, $blocks);
        // line 45
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 54
        $this->displayBlock('choice_widget_collapsed', $context, $blocks);
        // line 74
        $this->displayBlock('choice_widget_options', $context, $blocks);
        // line 87
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 91
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 95
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 108
        $this->displayBlock('date_widget', $context, $blocks);
        // line 122
        $this->displayBlock('time_widget', $context, $blocks);
        // line 133
        $this->displayBlock('dateinterval_widget', $context, $blocks);
        // line 168
        $this->displayBlock('number_widget', $context, $blocks);
        // line 174
        $this->displayBlock('integer_widget', $context, $blocks);
        // line 179
        $this->displayBlock('money_widget', $context, $blocks);
        // line 183
        $this->displayBlock('url_widget', $context, $blocks);
        // line 188
        $this->displayBlock('search_widget', $context, $blocks);
        // line 193
        $this->displayBlock('percent_widget', $context, $blocks);
        // line 198
        $this->displayBlock('password_widget', $context, $blocks);
        // line 203
        $this->displayBlock('hidden_widget', $context, $blocks);
        // line 208
        $this->displayBlock('email_widget', $context, $blocks);
        // line 213
        $this->displayBlock('range_widget', $context, $blocks);
        // line 218
        $this->displayBlock('button_widget', $context, $blocks);
        // line 232
        $this->displayBlock('submit_widget', $context, $blocks);
        // line 237
        $this->displayBlock('reset_widget', $context, $blocks);
        // line 242
        $this->displayBlock('tel_widget', $context, $blocks);
        // line 247
        $this->displayBlock('color_widget', $context, $blocks);
        // line 254
        $this->displayBlock('form_label', $context, $blocks);
        // line 276
        $this->displayBlock('button_label', $context, $blocks);
        // line 280
        $this->displayBlock('repeated_row', $context, $blocks);
        // line 288
        $this->displayBlock('form_row', $context, $blocks);
        // line 296
        $this->displayBlock('button_row', $context, $blocks);
        // line 302
        $this->displayBlock('hidden_row', $context, $blocks);
        // line 308
        $this->displayBlock('form', $context, $blocks);
        // line 314
        $this->displayBlock('form_start', $context, $blocks);
        // line 328
        $this->displayBlock('form_end', $context, $blocks);
        // line 335
        $this->displayBlock('form_errors', $context, $blocks);
        // line 345
        $this->displayBlock('form_rest', $context, $blocks);
        // line 366
        echo "
";
        // line 369
        $this->displayBlock('form_rows', $context, $blocks);
        // line 375
        $this->displayBlock('widget_attributes', $context, $blocks);
        // line 382
        $this->displayBlock('widget_container_attributes', $context, $blocks);
        // line 387
        $this->displayBlock('button_attributes', $context, $blocks);
        // line 392
        $this->displayBlock('attributes', $context, $blocks);
        
        $__internal_d8d6785825d91d867754bac8cb1da25a1c6ee1f58804c50d88c9493c276e52a6->leave($__internal_d8d6785825d91d867754bac8cb1da25a1c6ee1f58804c50d88c9493c276e52a6_prof);

        
        $__internal_dd1a102a071ddf66fdde521709e431cbffcc147ca35f45ad5dcb23af45ad8ef5->leave($__internal_dd1a102a071ddf66fdde521709e431cbffcc147ca35f45ad5dcb23af45ad8ef5_prof);

    }

    // line 3
    public function block_form_widget($context, array $blocks = array())
    {
        $__internal_4d7e275238cb24213703e95b523190291da66128c1d1ea7b2e56c24da63e5331 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d7e275238cb24213703e95b523190291da66128c1d1ea7b2e56c24da63e5331->enter($__internal_4d7e275238cb24213703e95b523190291da66128c1d1ea7b2e56c24da63e5331_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget"));

        $__internal_c93ce54f3aa82d241da7dc61ada07a473a97b5c8852104b06183e8eda731ad45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c93ce54f3aa82d241da7dc61ada07a473a97b5c8852104b06183e8eda731ad45->enter($__internal_c93ce54f3aa82d241da7dc61ada07a473a97b5c8852104b06183e8eda731ad45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget"));

        // line 4
        if ((isset($context["compound"]) || array_key_exists("compound", $context) ? $context["compound"] : (function () { throw new Twig_Error_Runtime('Variable "compound" does not exist.', 4, $this->getSourceContext()); })())) {
            // line 5
            $this->displayBlock("form_widget_compound", $context, $blocks);
        } else {
            // line 7
            $this->displayBlock("form_widget_simple", $context, $blocks);
        }
        
        $__internal_c93ce54f3aa82d241da7dc61ada07a473a97b5c8852104b06183e8eda731ad45->leave($__internal_c93ce54f3aa82d241da7dc61ada07a473a97b5c8852104b06183e8eda731ad45_prof);

        
        $__internal_4d7e275238cb24213703e95b523190291da66128c1d1ea7b2e56c24da63e5331->leave($__internal_4d7e275238cb24213703e95b523190291da66128c1d1ea7b2e56c24da63e5331_prof);

    }

    // line 11
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_361d197e748242894271ee8dbf2a7bf4eb3967e3352439c186f73193e4486b8d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_361d197e748242894271ee8dbf2a7bf4eb3967e3352439c186f73193e4486b8d->enter($__internal_361d197e748242894271ee8dbf2a7bf4eb3967e3352439c186f73193e4486b8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_0ce171c0b74ef29d8ef8487723584db65bb20e31ec210ccc27c3e46e6dc9f8b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ce171c0b74ef29d8ef8487723584db65bb20e31ec210ccc27c3e46e6dc9f8b5->enter($__internal_0ce171c0b74ef29d8ef8487723584db65bb20e31ec210ccc27c3e46e6dc9f8b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 12
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 12, $this->getSourceContext()); })()), "text")) : ("text"));
        // line 13
        echo "<input type=\"";
        echo twig_escape_filter($this->env, (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 13, $this->getSourceContext()); })()), "html", null, true);
        echo "\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo " ";
        if ( !twig_test_empty((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 13, $this->getSourceContext()); })()))) {
            echo "value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 13, $this->getSourceContext()); })()), "html", null, true);
            echo "\" ";
        }
        echo "/>";
        
        $__internal_0ce171c0b74ef29d8ef8487723584db65bb20e31ec210ccc27c3e46e6dc9f8b5->leave($__internal_0ce171c0b74ef29d8ef8487723584db65bb20e31ec210ccc27c3e46e6dc9f8b5_prof);

        
        $__internal_361d197e748242894271ee8dbf2a7bf4eb3967e3352439c186f73193e4486b8d->leave($__internal_361d197e748242894271ee8dbf2a7bf4eb3967e3352439c186f73193e4486b8d_prof);

    }

    // line 16
    public function block_form_widget_compound($context, array $blocks = array())
    {
        $__internal_59632726a954c7e856d04c311d4ddb204808289a420f8e87569892436426b4a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_59632726a954c7e856d04c311d4ddb204808289a420f8e87569892436426b4a4->enter($__internal_59632726a954c7e856d04c311d4ddb204808289a420f8e87569892436426b4a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        $__internal_08424bccd9f8e036678bdb844d1d0c1cd761048007ec6e51a6c6bcf8557afcc7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08424bccd9f8e036678bdb844d1d0c1cd761048007ec6e51a6c6bcf8557afcc7->enter($__internal_08424bccd9f8e036678bdb844d1d0c1cd761048007ec6e51a6c6bcf8557afcc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        // line 17
        echo "<div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">";
        // line 18
        if (Symfony\Bridge\Twig\Extension\twig_is_root_form((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 18, $this->getSourceContext()); })()))) {
            // line 19
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 19, $this->getSourceContext()); })()), 'errors');
        }
        // line 21
        $this->displayBlock("form_rows", $context, $blocks);
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 22, $this->getSourceContext()); })()), 'rest');
        // line 23
        echo "</div>";
        
        $__internal_08424bccd9f8e036678bdb844d1d0c1cd761048007ec6e51a6c6bcf8557afcc7->leave($__internal_08424bccd9f8e036678bdb844d1d0c1cd761048007ec6e51a6c6bcf8557afcc7_prof);

        
        $__internal_59632726a954c7e856d04c311d4ddb204808289a420f8e87569892436426b4a4->leave($__internal_59632726a954c7e856d04c311d4ddb204808289a420f8e87569892436426b4a4_prof);

    }

    // line 26
    public function block_collection_widget($context, array $blocks = array())
    {
        $__internal_0ea0715cf620f88211bc9e45fcb132fbd87752cffbeabe1eb0bb15c91bee3001 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ea0715cf620f88211bc9e45fcb132fbd87752cffbeabe1eb0bb15c91bee3001->enter($__internal_0ea0715cf620f88211bc9e45fcb132fbd87752cffbeabe1eb0bb15c91bee3001_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "collection_widget"));

        $__internal_c3dbc80fa61eb97502741126ce09d0e579bfb3fac9f1dc09ba14eb0c66cb19b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3dbc80fa61eb97502741126ce09d0e579bfb3fac9f1dc09ba14eb0c66cb19b5->enter($__internal_c3dbc80fa61eb97502741126ce09d0e579bfb3fac9f1dc09ba14eb0c66cb19b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "collection_widget"));

        // line 27
        if (array_key_exists("prototype", $context)) {
            // line 28
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 28, $this->getSourceContext()); })()), array("data-prototype" => $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["prototype"]) || array_key_exists("prototype", $context) ? $context["prototype"] : (function () { throw new Twig_Error_Runtime('Variable "prototype" does not exist.', 28, $this->getSourceContext()); })()), 'row')));
        }
        // line 30
        $this->displayBlock("form_widget", $context, $blocks);
        
        $__internal_c3dbc80fa61eb97502741126ce09d0e579bfb3fac9f1dc09ba14eb0c66cb19b5->leave($__internal_c3dbc80fa61eb97502741126ce09d0e579bfb3fac9f1dc09ba14eb0c66cb19b5_prof);

        
        $__internal_0ea0715cf620f88211bc9e45fcb132fbd87752cffbeabe1eb0bb15c91bee3001->leave($__internal_0ea0715cf620f88211bc9e45fcb132fbd87752cffbeabe1eb0bb15c91bee3001_prof);

    }

    // line 33
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_5fb1cfac27052138f3e5961d56a5167ca53dfff1b0a262283362dcf027f4ef46 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5fb1cfac27052138f3e5961d56a5167ca53dfff1b0a262283362dcf027f4ef46->enter($__internal_5fb1cfac27052138f3e5961d56a5167ca53dfff1b0a262283362dcf027f4ef46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_adb06f3b18fb9147ef6d7d95c1dc99b68a102e902fc298801e10f10ddc30a8cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_adb06f3b18fb9147ef6d7d95c1dc99b68a102e902fc298801e10f10ddc30a8cb->enter($__internal_adb06f3b18fb9147ef6d7d95c1dc99b68a102e902fc298801e10f10ddc30a8cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 34
        echo "<textarea ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo ">";
        echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 34, $this->getSourceContext()); })()), "html", null, true);
        echo "</textarea>";
        
        $__internal_adb06f3b18fb9147ef6d7d95c1dc99b68a102e902fc298801e10f10ddc30a8cb->leave($__internal_adb06f3b18fb9147ef6d7d95c1dc99b68a102e902fc298801e10f10ddc30a8cb_prof);

        
        $__internal_5fb1cfac27052138f3e5961d56a5167ca53dfff1b0a262283362dcf027f4ef46->leave($__internal_5fb1cfac27052138f3e5961d56a5167ca53dfff1b0a262283362dcf027f4ef46_prof);

    }

    // line 37
    public function block_choice_widget($context, array $blocks = array())
    {
        $__internal_061cb543d07add58b9217438f58a2caae136d1a462d9266b5ca35309eb341473 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_061cb543d07add58b9217438f58a2caae136d1a462d9266b5ca35309eb341473->enter($__internal_061cb543d07add58b9217438f58a2caae136d1a462d9266b5ca35309eb341473_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget"));

        $__internal_537cbacdf331f2d31f304e1417a80635eb95b5e54a6bef857224d5316267cd1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_537cbacdf331f2d31f304e1417a80635eb95b5e54a6bef857224d5316267cd1d->enter($__internal_537cbacdf331f2d31f304e1417a80635eb95b5e54a6bef857224d5316267cd1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget"));

        // line 38
        if ((isset($context["expanded"]) || array_key_exists("expanded", $context) ? $context["expanded"] : (function () { throw new Twig_Error_Runtime('Variable "expanded" does not exist.', 38, $this->getSourceContext()); })())) {
            // line 39
            $this->displayBlock("choice_widget_expanded", $context, $blocks);
        } else {
            // line 41
            $this->displayBlock("choice_widget_collapsed", $context, $blocks);
        }
        
        $__internal_537cbacdf331f2d31f304e1417a80635eb95b5e54a6bef857224d5316267cd1d->leave($__internal_537cbacdf331f2d31f304e1417a80635eb95b5e54a6bef857224d5316267cd1d_prof);

        
        $__internal_061cb543d07add58b9217438f58a2caae136d1a462d9266b5ca35309eb341473->leave($__internal_061cb543d07add58b9217438f58a2caae136d1a462d9266b5ca35309eb341473_prof);

    }

    // line 45
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_2a399af3877d974cf839f751b8e8b0c105e7a1cfe763fe02ec3a18b1f1e14e31 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a399af3877d974cf839f751b8e8b0c105e7a1cfe763fe02ec3a18b1f1e14e31->enter($__internal_2a399af3877d974cf839f751b8e8b0c105e7a1cfe763fe02ec3a18b1f1e14e31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_1fb3409c97af0246d2a3b6dac6e9b5458e1cf4921d1ae8b5f226d01eaa585b51 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1fb3409c97af0246d2a3b6dac6e9b5458e1cf4921d1ae8b5f226d01eaa585b51->enter($__internal_1fb3409c97af0246d2a3b6dac6e9b5458e1cf4921d1ae8b5f226d01eaa585b51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 46
        echo "<div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 47, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 48
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget');
            // line 49
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'label', array("translation_domain" => (isset($context["choice_translation_domain"]) || array_key_exists("choice_translation_domain", $context) ? $context["choice_translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "choice_translation_domain" does not exist.', 49, $this->getSourceContext()); })())));
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "</div>";
        
        $__internal_1fb3409c97af0246d2a3b6dac6e9b5458e1cf4921d1ae8b5f226d01eaa585b51->leave($__internal_1fb3409c97af0246d2a3b6dac6e9b5458e1cf4921d1ae8b5f226d01eaa585b51_prof);

        
        $__internal_2a399af3877d974cf839f751b8e8b0c105e7a1cfe763fe02ec3a18b1f1e14e31->leave($__internal_2a399af3877d974cf839f751b8e8b0c105e7a1cfe763fe02ec3a18b1f1e14e31_prof);

    }

    // line 54
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_78c21c8230e40115ebb37955d0d937ce18bd4a9ddd6659744140be5cd2e37f0e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_78c21c8230e40115ebb37955d0d937ce18bd4a9ddd6659744140be5cd2e37f0e->enter($__internal_78c21c8230e40115ebb37955d0d937ce18bd4a9ddd6659744140be5cd2e37f0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_fbfa7ce54dc4f2e371020a6e5e812fd244c90ebd9b05a7286b579f7b87da3b78 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fbfa7ce54dc4f2e371020a6e5e812fd244c90ebd9b05a7286b579f7b87da3b78->enter($__internal_fbfa7ce54dc4f2e371020a6e5e812fd244c90ebd9b05a7286b579f7b87da3b78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 55
        if ((((((isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new Twig_Error_Runtime('Variable "required" does not exist.', 55, $this->getSourceContext()); })()) && (null === (isset($context["placeholder"]) || array_key_exists("placeholder", $context) ? $context["placeholder"] : (function () { throw new Twig_Error_Runtime('Variable "placeholder" does not exist.', 55, $this->getSourceContext()); })()))) &&  !(isset($context["placeholder_in_choices"]) || array_key_exists("placeholder_in_choices", $context) ? $context["placeholder_in_choices"] : (function () { throw new Twig_Error_Runtime('Variable "placeholder_in_choices" does not exist.', 55, $this->getSourceContext()); })())) &&  !(isset($context["multiple"]) || array_key_exists("multiple", $context) ? $context["multiple"] : (function () { throw new Twig_Error_Runtime('Variable "multiple" does not exist.', 55, $this->getSourceContext()); })())) && ( !twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "size", array(), "any", true, true) || (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 55, $this->getSourceContext()); })()), "size", array()) <= 1)))) {
            // line 56
            $context["required"] = false;
        }
        // line 58
        echo "<select ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if ((isset($context["multiple"]) || array_key_exists("multiple", $context) ? $context["multiple"] : (function () { throw new Twig_Error_Runtime('Variable "multiple" does not exist.', 58, $this->getSourceContext()); })())) {
            echo " multiple=\"multiple\"";
        }
        echo ">";
        // line 59
        if ( !(null === (isset($context["placeholder"]) || array_key_exists("placeholder", $context) ? $context["placeholder"] : (function () { throw new Twig_Error_Runtime('Variable "placeholder" does not exist.', 59, $this->getSourceContext()); })()))) {
            // line 60
            echo "<option value=\"\"";
            if (((isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new Twig_Error_Runtime('Variable "required" does not exist.', 60, $this->getSourceContext()); })()) && twig_test_empty((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 60, $this->getSourceContext()); })())))) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, ((((isset($context["placeholder"]) || array_key_exists("placeholder", $context) ? $context["placeholder"] : (function () { throw new Twig_Error_Runtime('Variable "placeholder" does not exist.', 60, $this->getSourceContext()); })()) != "")) ? (((((isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 60, $this->getSourceContext()); })()) === false)) ? ((isset($context["placeholder"]) || array_key_exists("placeholder", $context) ? $context["placeholder"] : (function () { throw new Twig_Error_Runtime('Variable "placeholder" does not exist.', 60, $this->getSourceContext()); })())) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["placeholder"]) || array_key_exists("placeholder", $context) ? $context["placeholder"] : (function () { throw new Twig_Error_Runtime('Variable "placeholder" does not exist.', 60, $this->getSourceContext()); })()), array(), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 60, $this->getSourceContext()); })()))))) : ("")), "html", null, true);
            echo "</option>";
        }
        // line 62
        if ((twig_length_filter($this->env, (isset($context["preferred_choices"]) || array_key_exists("preferred_choices", $context) ? $context["preferred_choices"] : (function () { throw new Twig_Error_Runtime('Variable "preferred_choices" does not exist.', 62, $this->getSourceContext()); })())) > 0)) {
            // line 63
            $context["options"] = (isset($context["preferred_choices"]) || array_key_exists("preferred_choices", $context) ? $context["preferred_choices"] : (function () { throw new Twig_Error_Runtime('Variable "preferred_choices" does not exist.', 63, $this->getSourceContext()); })());
            // line 64
            $this->displayBlock("choice_widget_options", $context, $blocks);
            // line 65
            if (((twig_length_filter($this->env, (isset($context["choices"]) || array_key_exists("choices", $context) ? $context["choices"] : (function () { throw new Twig_Error_Runtime('Variable "choices" does not exist.', 65, $this->getSourceContext()); })())) > 0) &&  !(null === (isset($context["separator"]) || array_key_exists("separator", $context) ? $context["separator"] : (function () { throw new Twig_Error_Runtime('Variable "separator" does not exist.', 65, $this->getSourceContext()); })())))) {
                // line 66
                echo "<option disabled=\"disabled\">";
                echo twig_escape_filter($this->env, (isset($context["separator"]) || array_key_exists("separator", $context) ? $context["separator"] : (function () { throw new Twig_Error_Runtime('Variable "separator" does not exist.', 66, $this->getSourceContext()); })()), "html", null, true);
                echo "</option>";
            }
        }
        // line 69
        $context["options"] = (isset($context["choices"]) || array_key_exists("choices", $context) ? $context["choices"] : (function () { throw new Twig_Error_Runtime('Variable "choices" does not exist.', 69, $this->getSourceContext()); })());
        // line 70
        $this->displayBlock("choice_widget_options", $context, $blocks);
        // line 71
        echo "</select>";
        
        $__internal_fbfa7ce54dc4f2e371020a6e5e812fd244c90ebd9b05a7286b579f7b87da3b78->leave($__internal_fbfa7ce54dc4f2e371020a6e5e812fd244c90ebd9b05a7286b579f7b87da3b78_prof);

        
        $__internal_78c21c8230e40115ebb37955d0d937ce18bd4a9ddd6659744140be5cd2e37f0e->leave($__internal_78c21c8230e40115ebb37955d0d937ce18bd4a9ddd6659744140be5cd2e37f0e_prof);

    }

    // line 74
    public function block_choice_widget_options($context, array $blocks = array())
    {
        $__internal_2af02a66c152b24660666faefb647b83a7145df7015f142a26eb4997a879730d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2af02a66c152b24660666faefb647b83a7145df7015f142a26eb4997a879730d->enter($__internal_2af02a66c152b24660666faefb647b83a7145df7015f142a26eb4997a879730d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_options"));

        $__internal_9425e2037f0f2d264a2b3d53e28f353bed3ea8c830bc7bb60f35c79a0207fb6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9425e2037f0f2d264a2b3d53e28f353bed3ea8c830bc7bb60f35c79a0207fb6e->enter($__internal_9425e2037f0f2d264a2b3d53e28f353bed3ea8c830bc7bb60f35c79a0207fb6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_options"));

        // line 75
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 75, $this->getSourceContext()); })()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["group_label"] => $context["choice"]) {
            // line 76
            if (twig_test_iterable($context["choice"])) {
                // line 77
                echo "<optgroup label=\"";
                echo twig_escape_filter($this->env, ((((isset($context["choice_translation_domain"]) || array_key_exists("choice_translation_domain", $context) ? $context["choice_translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "choice_translation_domain" does not exist.', 77, $this->getSourceContext()); })()) === false)) ? ($context["group_label"]) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["group_label"], array(), (isset($context["choice_translation_domain"]) || array_key_exists("choice_translation_domain", $context) ? $context["choice_translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "choice_translation_domain" does not exist.', 77, $this->getSourceContext()); })())))), "html", null, true);
                echo "\">
                ";
                // line 78
                $context["options"] = $context["choice"];
                // line 79
                $this->displayBlock("choice_widget_options", $context, $blocks);
                // line 80
                echo "</optgroup>";
            } else {
                // line 82
                echo "<option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["choice"], "value", array()), "html", null, true);
                echo "\"";
                if (twig_get_attribute($this->env, $this->getSourceContext(), $context["choice"], "attr", array())) {
                    $__internal_fa9c166e07d7ff838cd46ba4ba1ffbfff301256b2ea78ededb11a72540d9b079 = array("attr" => twig_get_attribute($this->env, $this->getSourceContext(), $context["choice"], "attr", array()));
                    if (!is_array($__internal_fa9c166e07d7ff838cd46ba4ba1ffbfff301256b2ea78ededb11a72540d9b079)) {
                        throw new Twig_Error_Runtime('Variables passed to the "with" tag must be a hash.');
                    }
                    $context['_parent'] = $context;
                    $context = array_merge($context, $__internal_fa9c166e07d7ff838cd46ba4ba1ffbfff301256b2ea78ededb11a72540d9b079);
                    $this->displayBlock("attributes", $context, $blocks);
                    $context = $context['_parent'];
                }
                if (Symfony\Bridge\Twig\Extension\twig_is_selected_choice($context["choice"], (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 82, $this->getSourceContext()); })()))) {
                    echo " selected=\"selected\"";
                }
                echo ">";
                echo twig_escape_filter($this->env, ((((isset($context["choice_translation_domain"]) || array_key_exists("choice_translation_domain", $context) ? $context["choice_translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "choice_translation_domain" does not exist.', 82, $this->getSourceContext()); })()) === false)) ? (twig_get_attribute($this->env, $this->getSourceContext(), $context["choice"], "label", array())) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), $context["choice"], "label", array()), array(), (isset($context["choice_translation_domain"]) || array_key_exists("choice_translation_domain", $context) ? $context["choice_translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "choice_translation_domain" does not exist.', 82, $this->getSourceContext()); })())))), "html", null, true);
                echo "</option>";
            }
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['group_label'], $context['choice'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_9425e2037f0f2d264a2b3d53e28f353bed3ea8c830bc7bb60f35c79a0207fb6e->leave($__internal_9425e2037f0f2d264a2b3d53e28f353bed3ea8c830bc7bb60f35c79a0207fb6e_prof);

        
        $__internal_2af02a66c152b24660666faefb647b83a7145df7015f142a26eb4997a879730d->leave($__internal_2af02a66c152b24660666faefb647b83a7145df7015f142a26eb4997a879730d_prof);

    }

    // line 87
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_82934f96b4dc64d406bcf1cd9b08ad98ad43410781d079f7a85d49dd99e0bea0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82934f96b4dc64d406bcf1cd9b08ad98ad43410781d079f7a85d49dd99e0bea0->enter($__internal_82934f96b4dc64d406bcf1cd9b08ad98ad43410781d079f7a85d49dd99e0bea0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_20950d0b7484a64e5e6212ef934b2132e243b5893e9d263057f17b3721bfc226 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20950d0b7484a64e5e6212ef934b2132e243b5893e9d263057f17b3721bfc226->enter($__internal_20950d0b7484a64e5e6212ef934b2132e243b5893e9d263057f17b3721bfc226_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 88
        echo "<input type=\"checkbox\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (array_key_exists("value", $context)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 88, $this->getSourceContext()); })()), "html", null, true);
            echo "\"";
        }
        if ((isset($context["checked"]) || array_key_exists("checked", $context) ? $context["checked"] : (function () { throw new Twig_Error_Runtime('Variable "checked" does not exist.', 88, $this->getSourceContext()); })())) {
            echo " checked=\"checked\"";
        }
        echo " />";
        
        $__internal_20950d0b7484a64e5e6212ef934b2132e243b5893e9d263057f17b3721bfc226->leave($__internal_20950d0b7484a64e5e6212ef934b2132e243b5893e9d263057f17b3721bfc226_prof);

        
        $__internal_82934f96b4dc64d406bcf1cd9b08ad98ad43410781d079f7a85d49dd99e0bea0->leave($__internal_82934f96b4dc64d406bcf1cd9b08ad98ad43410781d079f7a85d49dd99e0bea0_prof);

    }

    // line 91
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_e10518556b2182581413b2921af839b1635ca222bc5a1f5edec3c570be2de18c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e10518556b2182581413b2921af839b1635ca222bc5a1f5edec3c570be2de18c->enter($__internal_e10518556b2182581413b2921af839b1635ca222bc5a1f5edec3c570be2de18c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_46b99d4e52e2b49ef09948737687ce1b334fd451b93183a5741a7dff367587a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46b99d4e52e2b49ef09948737687ce1b334fd451b93183a5741a7dff367587a8->enter($__internal_46b99d4e52e2b49ef09948737687ce1b334fd451b93183a5741a7dff367587a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 92
        echo "<input type=\"radio\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (array_key_exists("value", $context)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 92, $this->getSourceContext()); })()), "html", null, true);
            echo "\"";
        }
        if ((isset($context["checked"]) || array_key_exists("checked", $context) ? $context["checked"] : (function () { throw new Twig_Error_Runtime('Variable "checked" does not exist.', 92, $this->getSourceContext()); })())) {
            echo " checked=\"checked\"";
        }
        echo " />";
        
        $__internal_46b99d4e52e2b49ef09948737687ce1b334fd451b93183a5741a7dff367587a8->leave($__internal_46b99d4e52e2b49ef09948737687ce1b334fd451b93183a5741a7dff367587a8_prof);

        
        $__internal_e10518556b2182581413b2921af839b1635ca222bc5a1f5edec3c570be2de18c->leave($__internal_e10518556b2182581413b2921af839b1635ca222bc5a1f5edec3c570be2de18c_prof);

    }

    // line 95
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_23a1fbb9fa624c4545d1576757db1d16cba199e358039fa487c1fe45497d38ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23a1fbb9fa624c4545d1576757db1d16cba199e358039fa487c1fe45497d38ac->enter($__internal_23a1fbb9fa624c4545d1576757db1d16cba199e358039fa487c1fe45497d38ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_597c7b92ca5a860eb21241ba9ee91f4f69bf7ebe2bfde3ebc265e0e29d42056d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_597c7b92ca5a860eb21241ba9ee91f4f69bf7ebe2bfde3ebc265e0e29d42056d->enter($__internal_597c7b92ca5a860eb21241ba9ee91f4f69bf7ebe2bfde3ebc265e0e29d42056d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 96
        if (((isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 96, $this->getSourceContext()); })()) == "single_text")) {
            // line 97
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 99
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 100
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 100, $this->getSourceContext()); })()), "date", array()), 'errors');
            // line 101
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 101, $this->getSourceContext()); })()), "time", array()), 'errors');
            // line 102
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 102, $this->getSourceContext()); })()), "date", array()), 'widget');
            // line 103
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 103, $this->getSourceContext()); })()), "time", array()), 'widget');
            // line 104
            echo "</div>";
        }
        
        $__internal_597c7b92ca5a860eb21241ba9ee91f4f69bf7ebe2bfde3ebc265e0e29d42056d->leave($__internal_597c7b92ca5a860eb21241ba9ee91f4f69bf7ebe2bfde3ebc265e0e29d42056d_prof);

        
        $__internal_23a1fbb9fa624c4545d1576757db1d16cba199e358039fa487c1fe45497d38ac->leave($__internal_23a1fbb9fa624c4545d1576757db1d16cba199e358039fa487c1fe45497d38ac_prof);

    }

    // line 108
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_9b0cb5f76937095c5ee4e519c875774175db7090703cf9f51ef9d8e3c8d9f0a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b0cb5f76937095c5ee4e519c875774175db7090703cf9f51ef9d8e3c8d9f0a4->enter($__internal_9b0cb5f76937095c5ee4e519c875774175db7090703cf9f51ef9d8e3c8d9f0a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_eb120374d145b92d73157dbaf3c5bdafcbc8286229ea500cf314fcd87b48af7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb120374d145b92d73157dbaf3c5bdafcbc8286229ea500cf314fcd87b48af7f->enter($__internal_eb120374d145b92d73157dbaf3c5bdafcbc8286229ea500cf314fcd87b48af7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 109
        if (((isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 109, $this->getSourceContext()); })()) == "single_text")) {
            // line 110
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 112
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 113
            echo twig_replace_filter((isset($context["date_pattern"]) || array_key_exists("date_pattern", $context) ? $context["date_pattern"] : (function () { throw new Twig_Error_Runtime('Variable "date_pattern" does not exist.', 113, $this->getSourceContext()); })()), array("{{ year }}" =>             // line 114
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 114, $this->getSourceContext()); })()), "year", array()), 'widget'), "{{ month }}" =>             // line 115
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 115, $this->getSourceContext()); })()), "month", array()), 'widget'), "{{ day }}" =>             // line 116
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 116, $this->getSourceContext()); })()), "day", array()), 'widget')));
            // line 118
            echo "</div>";
        }
        
        $__internal_eb120374d145b92d73157dbaf3c5bdafcbc8286229ea500cf314fcd87b48af7f->leave($__internal_eb120374d145b92d73157dbaf3c5bdafcbc8286229ea500cf314fcd87b48af7f_prof);

        
        $__internal_9b0cb5f76937095c5ee4e519c875774175db7090703cf9f51ef9d8e3c8d9f0a4->leave($__internal_9b0cb5f76937095c5ee4e519c875774175db7090703cf9f51ef9d8e3c8d9f0a4_prof);

    }

    // line 122
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_8d01e001f0ba2b055a60352b44765f19036a96840c6307b065d125565f316210 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d01e001f0ba2b055a60352b44765f19036a96840c6307b065d125565f316210->enter($__internal_8d01e001f0ba2b055a60352b44765f19036a96840c6307b065d125565f316210_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_ddea83e5df7306197be5cdfaf889c6af697772199c90b5663d1f78a990057702 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ddea83e5df7306197be5cdfaf889c6af697772199c90b5663d1f78a990057702->enter($__internal_ddea83e5df7306197be5cdfaf889c6af697772199c90b5663d1f78a990057702_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 123
        if (((isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 123, $this->getSourceContext()); })()) == "single_text")) {
            // line 124
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 126
            $context["vars"] = ((((isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 126, $this->getSourceContext()); })()) == "text")) ? (array("attr" => array("size" => 1))) : (array()));
            // line 127
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
            ";
            // line 128
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 128, $this->getSourceContext()); })()), "hour", array()), 'widget', (isset($context["vars"]) || array_key_exists("vars", $context) ? $context["vars"] : (function () { throw new Twig_Error_Runtime('Variable "vars" does not exist.', 128, $this->getSourceContext()); })()));
            if ((isset($context["with_minutes"]) || array_key_exists("with_minutes", $context) ? $context["with_minutes"] : (function () { throw new Twig_Error_Runtime('Variable "with_minutes" does not exist.', 128, $this->getSourceContext()); })())) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 128, $this->getSourceContext()); })()), "minute", array()), 'widget', (isset($context["vars"]) || array_key_exists("vars", $context) ? $context["vars"] : (function () { throw new Twig_Error_Runtime('Variable "vars" does not exist.', 128, $this->getSourceContext()); })()));
            }
            if ((isset($context["with_seconds"]) || array_key_exists("with_seconds", $context) ? $context["with_seconds"] : (function () { throw new Twig_Error_Runtime('Variable "with_seconds" does not exist.', 128, $this->getSourceContext()); })())) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 128, $this->getSourceContext()); })()), "second", array()), 'widget', (isset($context["vars"]) || array_key_exists("vars", $context) ? $context["vars"] : (function () { throw new Twig_Error_Runtime('Variable "vars" does not exist.', 128, $this->getSourceContext()); })()));
            }
            // line 129
            echo "        </div>";
        }
        
        $__internal_ddea83e5df7306197be5cdfaf889c6af697772199c90b5663d1f78a990057702->leave($__internal_ddea83e5df7306197be5cdfaf889c6af697772199c90b5663d1f78a990057702_prof);

        
        $__internal_8d01e001f0ba2b055a60352b44765f19036a96840c6307b065d125565f316210->leave($__internal_8d01e001f0ba2b055a60352b44765f19036a96840c6307b065d125565f316210_prof);

    }

    // line 133
    public function block_dateinterval_widget($context, array $blocks = array())
    {
        $__internal_63a460bcb9666a5d9b13c5227abf621f65f2a042879c7c66e52e8c6b3cce5cba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_63a460bcb9666a5d9b13c5227abf621f65f2a042879c7c66e52e8c6b3cce5cba->enter($__internal_63a460bcb9666a5d9b13c5227abf621f65f2a042879c7c66e52e8c6b3cce5cba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        $__internal_1024bd8b63d394a29b8fd22a60d6659e1c111b36b20a71239fbe9e8b6e36c0b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1024bd8b63d394a29b8fd22a60d6659e1c111b36b20a71239fbe9e8b6e36c0b2->enter($__internal_1024bd8b63d394a29b8fd22a60d6659e1c111b36b20a71239fbe9e8b6e36c0b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        // line 134
        if (((isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 134, $this->getSourceContext()); })()) == "single_text")) {
            // line 135
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 137
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 138
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 138, $this->getSourceContext()); })()), 'errors');
            // line 139
            echo "<table class=\"";
            echo twig_escape_filter($this->env, ((array_key_exists("table_class", $context)) ? (_twig_default_filter((isset($context["table_class"]) || array_key_exists("table_class", $context) ? $context["table_class"] : (function () { throw new Twig_Error_Runtime('Variable "table_class" does not exist.', 139, $this->getSourceContext()); })()), "")) : ("")), "html", null, true);
            echo "\">
                <thead>
                    <tr>";
            // line 142
            if ((isset($context["with_years"]) || array_key_exists("with_years", $context) ? $context["with_years"] : (function () { throw new Twig_Error_Runtime('Variable "with_years" does not exist.', 142, $this->getSourceContext()); })())) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 142, $this->getSourceContext()); })()), "years", array()), 'label');
                echo "</th>";
            }
            // line 143
            if ((isset($context["with_months"]) || array_key_exists("with_months", $context) ? $context["with_months"] : (function () { throw new Twig_Error_Runtime('Variable "with_months" does not exist.', 143, $this->getSourceContext()); })())) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 143, $this->getSourceContext()); })()), "months", array()), 'label');
                echo "</th>";
            }
            // line 144
            if ((isset($context["with_weeks"]) || array_key_exists("with_weeks", $context) ? $context["with_weeks"] : (function () { throw new Twig_Error_Runtime('Variable "with_weeks" does not exist.', 144, $this->getSourceContext()); })())) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 144, $this->getSourceContext()); })()), "weeks", array()), 'label');
                echo "</th>";
            }
            // line 145
            if ((isset($context["with_days"]) || array_key_exists("with_days", $context) ? $context["with_days"] : (function () { throw new Twig_Error_Runtime('Variable "with_days" does not exist.', 145, $this->getSourceContext()); })())) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 145, $this->getSourceContext()); })()), "days", array()), 'label');
                echo "</th>";
            }
            // line 146
            if ((isset($context["with_hours"]) || array_key_exists("with_hours", $context) ? $context["with_hours"] : (function () { throw new Twig_Error_Runtime('Variable "with_hours" does not exist.', 146, $this->getSourceContext()); })())) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 146, $this->getSourceContext()); })()), "hours", array()), 'label');
                echo "</th>";
            }
            // line 147
            if ((isset($context["with_minutes"]) || array_key_exists("with_minutes", $context) ? $context["with_minutes"] : (function () { throw new Twig_Error_Runtime('Variable "with_minutes" does not exist.', 147, $this->getSourceContext()); })())) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 147, $this->getSourceContext()); })()), "minutes", array()), 'label');
                echo "</th>";
            }
            // line 148
            if ((isset($context["with_seconds"]) || array_key_exists("with_seconds", $context) ? $context["with_seconds"] : (function () { throw new Twig_Error_Runtime('Variable "with_seconds" does not exist.', 148, $this->getSourceContext()); })())) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 148, $this->getSourceContext()); })()), "seconds", array()), 'label');
                echo "</th>";
            }
            // line 149
            echo "</tr>
                </thead>
                <tbody>
                    <tr>";
            // line 153
            if ((isset($context["with_years"]) || array_key_exists("with_years", $context) ? $context["with_years"] : (function () { throw new Twig_Error_Runtime('Variable "with_years" does not exist.', 153, $this->getSourceContext()); })())) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 153, $this->getSourceContext()); })()), "years", array()), 'widget');
                echo "</td>";
            }
            // line 154
            if ((isset($context["with_months"]) || array_key_exists("with_months", $context) ? $context["with_months"] : (function () { throw new Twig_Error_Runtime('Variable "with_months" does not exist.', 154, $this->getSourceContext()); })())) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 154, $this->getSourceContext()); })()), "months", array()), 'widget');
                echo "</td>";
            }
            // line 155
            if ((isset($context["with_weeks"]) || array_key_exists("with_weeks", $context) ? $context["with_weeks"] : (function () { throw new Twig_Error_Runtime('Variable "with_weeks" does not exist.', 155, $this->getSourceContext()); })())) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 155, $this->getSourceContext()); })()), "weeks", array()), 'widget');
                echo "</td>";
            }
            // line 156
            if ((isset($context["with_days"]) || array_key_exists("with_days", $context) ? $context["with_days"] : (function () { throw new Twig_Error_Runtime('Variable "with_days" does not exist.', 156, $this->getSourceContext()); })())) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 156, $this->getSourceContext()); })()), "days", array()), 'widget');
                echo "</td>";
            }
            // line 157
            if ((isset($context["with_hours"]) || array_key_exists("with_hours", $context) ? $context["with_hours"] : (function () { throw new Twig_Error_Runtime('Variable "with_hours" does not exist.', 157, $this->getSourceContext()); })())) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 157, $this->getSourceContext()); })()), "hours", array()), 'widget');
                echo "</td>";
            }
            // line 158
            if ((isset($context["with_minutes"]) || array_key_exists("with_minutes", $context) ? $context["with_minutes"] : (function () { throw new Twig_Error_Runtime('Variable "with_minutes" does not exist.', 158, $this->getSourceContext()); })())) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 158, $this->getSourceContext()); })()), "minutes", array()), 'widget');
                echo "</td>";
            }
            // line 159
            if ((isset($context["with_seconds"]) || array_key_exists("with_seconds", $context) ? $context["with_seconds"] : (function () { throw new Twig_Error_Runtime('Variable "with_seconds" does not exist.', 159, $this->getSourceContext()); })())) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 159, $this->getSourceContext()); })()), "seconds", array()), 'widget');
                echo "</td>";
            }
            // line 160
            echo "</tr>
                </tbody>
            </table>";
            // line 163
            if ((isset($context["with_invert"]) || array_key_exists("with_invert", $context) ? $context["with_invert"] : (function () { throw new Twig_Error_Runtime('Variable "with_invert" does not exist.', 163, $this->getSourceContext()); })())) {
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 163, $this->getSourceContext()); })()), "invert", array()), 'widget');
            }
            // line 164
            echo "</div>";
        }
        
        $__internal_1024bd8b63d394a29b8fd22a60d6659e1c111b36b20a71239fbe9e8b6e36c0b2->leave($__internal_1024bd8b63d394a29b8fd22a60d6659e1c111b36b20a71239fbe9e8b6e36c0b2_prof);

        
        $__internal_63a460bcb9666a5d9b13c5227abf621f65f2a042879c7c66e52e8c6b3cce5cba->leave($__internal_63a460bcb9666a5d9b13c5227abf621f65f2a042879c7c66e52e8c6b3cce5cba_prof);

    }

    // line 168
    public function block_number_widget($context, array $blocks = array())
    {
        $__internal_6d52d82a70118c01ca5afbb580fb3d0f4af3ac33a3fd14f33e8125130e1bcb6c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d52d82a70118c01ca5afbb580fb3d0f4af3ac33a3fd14f33e8125130e1bcb6c->enter($__internal_6d52d82a70118c01ca5afbb580fb3d0f4af3ac33a3fd14f33e8125130e1bcb6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "number_widget"));

        $__internal_9fccca14c6028e098095b1877b52f9be1c460770e85cdbc552d609979a11449e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9fccca14c6028e098095b1877b52f9be1c460770e85cdbc552d609979a11449e->enter($__internal_9fccca14c6028e098095b1877b52f9be1c460770e85cdbc552d609979a11449e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "number_widget"));

        // line 170
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 170, $this->getSourceContext()); })()), "text")) : ("text"));
        // line 171
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_9fccca14c6028e098095b1877b52f9be1c460770e85cdbc552d609979a11449e->leave($__internal_9fccca14c6028e098095b1877b52f9be1c460770e85cdbc552d609979a11449e_prof);

        
        $__internal_6d52d82a70118c01ca5afbb580fb3d0f4af3ac33a3fd14f33e8125130e1bcb6c->leave($__internal_6d52d82a70118c01ca5afbb580fb3d0f4af3ac33a3fd14f33e8125130e1bcb6c_prof);

    }

    // line 174
    public function block_integer_widget($context, array $blocks = array())
    {
        $__internal_9899dff975daf312025af53e398c2d64df0b0aedd16c38ff0409f381c563087b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9899dff975daf312025af53e398c2d64df0b0aedd16c38ff0409f381c563087b->enter($__internal_9899dff975daf312025af53e398c2d64df0b0aedd16c38ff0409f381c563087b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "integer_widget"));

        $__internal_1d1645d30973795c21e8e21252407b56b63c44e156f4937da7d393f3821cbd77 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d1645d30973795c21e8e21252407b56b63c44e156f4937da7d393f3821cbd77->enter($__internal_1d1645d30973795c21e8e21252407b56b63c44e156f4937da7d393f3821cbd77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "integer_widget"));

        // line 175
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 175, $this->getSourceContext()); })()), "number")) : ("number"));
        // line 176
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_1d1645d30973795c21e8e21252407b56b63c44e156f4937da7d393f3821cbd77->leave($__internal_1d1645d30973795c21e8e21252407b56b63c44e156f4937da7d393f3821cbd77_prof);

        
        $__internal_9899dff975daf312025af53e398c2d64df0b0aedd16c38ff0409f381c563087b->leave($__internal_9899dff975daf312025af53e398c2d64df0b0aedd16c38ff0409f381c563087b_prof);

    }

    // line 179
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_7320a2960274570f6443feda9dc971a1d5f5ea5b9972ac84819d4ccda637c1a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7320a2960274570f6443feda9dc971a1d5f5ea5b9972ac84819d4ccda637c1a1->enter($__internal_7320a2960274570f6443feda9dc971a1d5f5ea5b9972ac84819d4ccda637c1a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_be03281504bb2ef6218181886f83fed9b7191898aaea63a2ea888a3832d468ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be03281504bb2ef6218181886f83fed9b7191898aaea63a2ea888a3832d468ad->enter($__internal_be03281504bb2ef6218181886f83fed9b7191898aaea63a2ea888a3832d468ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 180
        echo twig_replace_filter((isset($context["money_pattern"]) || array_key_exists("money_pattern", $context) ? $context["money_pattern"] : (function () { throw new Twig_Error_Runtime('Variable "money_pattern" does not exist.', 180, $this->getSourceContext()); })()), array("{{ widget }}" =>         $this->renderBlock("form_widget_simple", $context, $blocks)));
        
        $__internal_be03281504bb2ef6218181886f83fed9b7191898aaea63a2ea888a3832d468ad->leave($__internal_be03281504bb2ef6218181886f83fed9b7191898aaea63a2ea888a3832d468ad_prof);

        
        $__internal_7320a2960274570f6443feda9dc971a1d5f5ea5b9972ac84819d4ccda637c1a1->leave($__internal_7320a2960274570f6443feda9dc971a1d5f5ea5b9972ac84819d4ccda637c1a1_prof);

    }

    // line 183
    public function block_url_widget($context, array $blocks = array())
    {
        $__internal_58fbeb01b66d6a97dbaa63febf61decb52f209c9b29158210eb6f3777219751b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_58fbeb01b66d6a97dbaa63febf61decb52f209c9b29158210eb6f3777219751b->enter($__internal_58fbeb01b66d6a97dbaa63febf61decb52f209c9b29158210eb6f3777219751b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "url_widget"));

        $__internal_5f42d6f1735b8d92b8b4b611283627886f157c0466f5c037cd9b27f8dd2018d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f42d6f1735b8d92b8b4b611283627886f157c0466f5c037cd9b27f8dd2018d1->enter($__internal_5f42d6f1735b8d92b8b4b611283627886f157c0466f5c037cd9b27f8dd2018d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "url_widget"));

        // line 184
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 184, $this->getSourceContext()); })()), "url")) : ("url"));
        // line 185
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_5f42d6f1735b8d92b8b4b611283627886f157c0466f5c037cd9b27f8dd2018d1->leave($__internal_5f42d6f1735b8d92b8b4b611283627886f157c0466f5c037cd9b27f8dd2018d1_prof);

        
        $__internal_58fbeb01b66d6a97dbaa63febf61decb52f209c9b29158210eb6f3777219751b->leave($__internal_58fbeb01b66d6a97dbaa63febf61decb52f209c9b29158210eb6f3777219751b_prof);

    }

    // line 188
    public function block_search_widget($context, array $blocks = array())
    {
        $__internal_a0a097c0a79f0cd0d915e7b69f3318d708455b638e19cec009d1471c3862bb70 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a0a097c0a79f0cd0d915e7b69f3318d708455b638e19cec009d1471c3862bb70->enter($__internal_a0a097c0a79f0cd0d915e7b69f3318d708455b638e19cec009d1471c3862bb70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "search_widget"));

        $__internal_419632049cfab6d7676182fc2297a69eb13642c93135adbad636d9f3f281e6d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_419632049cfab6d7676182fc2297a69eb13642c93135adbad636d9f3f281e6d9->enter($__internal_419632049cfab6d7676182fc2297a69eb13642c93135adbad636d9f3f281e6d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "search_widget"));

        // line 189
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 189, $this->getSourceContext()); })()), "search")) : ("search"));
        // line 190
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_419632049cfab6d7676182fc2297a69eb13642c93135adbad636d9f3f281e6d9->leave($__internal_419632049cfab6d7676182fc2297a69eb13642c93135adbad636d9f3f281e6d9_prof);

        
        $__internal_a0a097c0a79f0cd0d915e7b69f3318d708455b638e19cec009d1471c3862bb70->leave($__internal_a0a097c0a79f0cd0d915e7b69f3318d708455b638e19cec009d1471c3862bb70_prof);

    }

    // line 193
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_ddca8b2b0228675bfc3440986b7832fef2d1b859adc5e48dd69f716915c10b3a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ddca8b2b0228675bfc3440986b7832fef2d1b859adc5e48dd69f716915c10b3a->enter($__internal_ddca8b2b0228675bfc3440986b7832fef2d1b859adc5e48dd69f716915c10b3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_157775b0b6baaec1f9cd620dac27fa28f44056e2d0005d143743dc211abcc189 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_157775b0b6baaec1f9cd620dac27fa28f44056e2d0005d143743dc211abcc189->enter($__internal_157775b0b6baaec1f9cd620dac27fa28f44056e2d0005d143743dc211abcc189_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 194
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 194, $this->getSourceContext()); })()), "text")) : ("text"));
        // line 195
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo " %";
        
        $__internal_157775b0b6baaec1f9cd620dac27fa28f44056e2d0005d143743dc211abcc189->leave($__internal_157775b0b6baaec1f9cd620dac27fa28f44056e2d0005d143743dc211abcc189_prof);

        
        $__internal_ddca8b2b0228675bfc3440986b7832fef2d1b859adc5e48dd69f716915c10b3a->leave($__internal_ddca8b2b0228675bfc3440986b7832fef2d1b859adc5e48dd69f716915c10b3a_prof);

    }

    // line 198
    public function block_password_widget($context, array $blocks = array())
    {
        $__internal_76d8fefad614c234cd0370782a6181ca05f59695197eae30c33115eb627ebf93 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_76d8fefad614c234cd0370782a6181ca05f59695197eae30c33115eb627ebf93->enter($__internal_76d8fefad614c234cd0370782a6181ca05f59695197eae30c33115eb627ebf93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "password_widget"));

        $__internal_8b4ef3d53427b3f035e227003aabc95941306726f45a0d99e06f50c5f3d3bb1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b4ef3d53427b3f035e227003aabc95941306726f45a0d99e06f50c5f3d3bb1f->enter($__internal_8b4ef3d53427b3f035e227003aabc95941306726f45a0d99e06f50c5f3d3bb1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "password_widget"));

        // line 199
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 199, $this->getSourceContext()); })()), "password")) : ("password"));
        // line 200
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_8b4ef3d53427b3f035e227003aabc95941306726f45a0d99e06f50c5f3d3bb1f->leave($__internal_8b4ef3d53427b3f035e227003aabc95941306726f45a0d99e06f50c5f3d3bb1f_prof);

        
        $__internal_76d8fefad614c234cd0370782a6181ca05f59695197eae30c33115eb627ebf93->leave($__internal_76d8fefad614c234cd0370782a6181ca05f59695197eae30c33115eb627ebf93_prof);

    }

    // line 203
    public function block_hidden_widget($context, array $blocks = array())
    {
        $__internal_0f7da5024ebeaa0a1c0134bb34bfaf834438565f02c9d1913891b33c497482d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f7da5024ebeaa0a1c0134bb34bfaf834438565f02c9d1913891b33c497482d3->enter($__internal_0f7da5024ebeaa0a1c0134bb34bfaf834438565f02c9d1913891b33c497482d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_widget"));

        $__internal_4f7d25a5f146d5729a4f8cbf8e4b4dd5552441097f90e43a8f6583d8fb6d6736 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f7d25a5f146d5729a4f8cbf8e4b4dd5552441097f90e43a8f6583d8fb6d6736->enter($__internal_4f7d25a5f146d5729a4f8cbf8e4b4dd5552441097f90e43a8f6583d8fb6d6736_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_widget"));

        // line 204
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 204, $this->getSourceContext()); })()), "hidden")) : ("hidden"));
        // line 205
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_4f7d25a5f146d5729a4f8cbf8e4b4dd5552441097f90e43a8f6583d8fb6d6736->leave($__internal_4f7d25a5f146d5729a4f8cbf8e4b4dd5552441097f90e43a8f6583d8fb6d6736_prof);

        
        $__internal_0f7da5024ebeaa0a1c0134bb34bfaf834438565f02c9d1913891b33c497482d3->leave($__internal_0f7da5024ebeaa0a1c0134bb34bfaf834438565f02c9d1913891b33c497482d3_prof);

    }

    // line 208
    public function block_email_widget($context, array $blocks = array())
    {
        $__internal_a6b877dca32bda26dceefdbe6faff81cafdc8e009082f90705871e7162546768 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a6b877dca32bda26dceefdbe6faff81cafdc8e009082f90705871e7162546768->enter($__internal_a6b877dca32bda26dceefdbe6faff81cafdc8e009082f90705871e7162546768_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "email_widget"));

        $__internal_b33113c8d7bca9e082a8376f2aaba2e420da1acf9881d78664e13b367de70136 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b33113c8d7bca9e082a8376f2aaba2e420da1acf9881d78664e13b367de70136->enter($__internal_b33113c8d7bca9e082a8376f2aaba2e420da1acf9881d78664e13b367de70136_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "email_widget"));

        // line 209
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 209, $this->getSourceContext()); })()), "email")) : ("email"));
        // line 210
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_b33113c8d7bca9e082a8376f2aaba2e420da1acf9881d78664e13b367de70136->leave($__internal_b33113c8d7bca9e082a8376f2aaba2e420da1acf9881d78664e13b367de70136_prof);

        
        $__internal_a6b877dca32bda26dceefdbe6faff81cafdc8e009082f90705871e7162546768->leave($__internal_a6b877dca32bda26dceefdbe6faff81cafdc8e009082f90705871e7162546768_prof);

    }

    // line 213
    public function block_range_widget($context, array $blocks = array())
    {
        $__internal_e02579c9502ee2b856e1e382cf0f3f461392192e6bfa02f46ff7d5d59b76ff4d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e02579c9502ee2b856e1e382cf0f3f461392192e6bfa02f46ff7d5d59b76ff4d->enter($__internal_e02579c9502ee2b856e1e382cf0f3f461392192e6bfa02f46ff7d5d59b76ff4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "range_widget"));

        $__internal_021ae4e9252e428431640e8a8cad41f19123e76ca39de3cae7e3fc6f7a24daf3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_021ae4e9252e428431640e8a8cad41f19123e76ca39de3cae7e3fc6f7a24daf3->enter($__internal_021ae4e9252e428431640e8a8cad41f19123e76ca39de3cae7e3fc6f7a24daf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "range_widget"));

        // line 214
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 214, $this->getSourceContext()); })()), "range")) : ("range"));
        // line 215
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_021ae4e9252e428431640e8a8cad41f19123e76ca39de3cae7e3fc6f7a24daf3->leave($__internal_021ae4e9252e428431640e8a8cad41f19123e76ca39de3cae7e3fc6f7a24daf3_prof);

        
        $__internal_e02579c9502ee2b856e1e382cf0f3f461392192e6bfa02f46ff7d5d59b76ff4d->leave($__internal_e02579c9502ee2b856e1e382cf0f3f461392192e6bfa02f46ff7d5d59b76ff4d_prof);

    }

    // line 218
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_d68d0cb9578b0bb35b373e6e84ae4d32a0d9de7d833baebe91760b91ebff98b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d68d0cb9578b0bb35b373e6e84ae4d32a0d9de7d833baebe91760b91ebff98b5->enter($__internal_d68d0cb9578b0bb35b373e6e84ae4d32a0d9de7d833baebe91760b91ebff98b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_b2f658278c77b7161c18efb84f10a2547bdc0bd447671e8a5fe5162e13083e19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2f658278c77b7161c18efb84f10a2547bdc0bd447671e8a5fe5162e13083e19->enter($__internal_b2f658278c77b7161c18efb84f10a2547bdc0bd447671e8a5fe5162e13083e19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 219
        if (( !((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 219, $this->getSourceContext()); })()) === false) && twig_test_empty((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 219, $this->getSourceContext()); })())))) {
            // line 220
            if ( !twig_test_empty((isset($context["label_format"]) || array_key_exists("label_format", $context) ? $context["label_format"] : (function () { throw new Twig_Error_Runtime('Variable "label_format" does not exist.', 220, $this->getSourceContext()); })()))) {
                // line 221
                $context["label"] = twig_replace_filter((isset($context["label_format"]) || array_key_exists("label_format", $context) ? $context["label_format"] : (function () { throw new Twig_Error_Runtime('Variable "label_format" does not exist.', 221, $this->getSourceContext()); })()), array("%name%" =>                 // line 222
(isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 222, $this->getSourceContext()); })()), "%id%" =>                 // line 223
(isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 223, $this->getSourceContext()); })())));
            } else {
                // line 226
                $context["label"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize((isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 226, $this->getSourceContext()); })()));
            }
        }
        // line 229
        echo "<button type=\"";
        echo twig_escape_filter($this->env, ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 229, $this->getSourceContext()); })()), "button")) : ("button")), "html", null, true);
        echo "\" ";
        $this->displayBlock("button_attributes", $context, $blocks);
        echo ">";
        echo twig_escape_filter($this->env, ((((isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 229, $this->getSourceContext()); })()) === false)) ? ((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 229, $this->getSourceContext()); })())) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 229, $this->getSourceContext()); })()), array(), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 229, $this->getSourceContext()); })())))), "html", null, true);
        echo "</button>";
        
        $__internal_b2f658278c77b7161c18efb84f10a2547bdc0bd447671e8a5fe5162e13083e19->leave($__internal_b2f658278c77b7161c18efb84f10a2547bdc0bd447671e8a5fe5162e13083e19_prof);

        
        $__internal_d68d0cb9578b0bb35b373e6e84ae4d32a0d9de7d833baebe91760b91ebff98b5->leave($__internal_d68d0cb9578b0bb35b373e6e84ae4d32a0d9de7d833baebe91760b91ebff98b5_prof);

    }

    // line 232
    public function block_submit_widget($context, array $blocks = array())
    {
        $__internal_173fd2149a42804ca75fef211b8a8365fc25cc2987648ed9417b2c359cf3f1a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_173fd2149a42804ca75fef211b8a8365fc25cc2987648ed9417b2c359cf3f1a6->enter($__internal_173fd2149a42804ca75fef211b8a8365fc25cc2987648ed9417b2c359cf3f1a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_widget"));

        $__internal_5b083573fc39fd8e35b29c084b8567f58921ed694603fbfb5eaa5065dd791e46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b083573fc39fd8e35b29c084b8567f58921ed694603fbfb5eaa5065dd791e46->enter($__internal_5b083573fc39fd8e35b29c084b8567f58921ed694603fbfb5eaa5065dd791e46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_widget"));

        // line 233
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 233, $this->getSourceContext()); })()), "submit")) : ("submit"));
        // line 234
        $this->displayBlock("button_widget", $context, $blocks);
        
        $__internal_5b083573fc39fd8e35b29c084b8567f58921ed694603fbfb5eaa5065dd791e46->leave($__internal_5b083573fc39fd8e35b29c084b8567f58921ed694603fbfb5eaa5065dd791e46_prof);

        
        $__internal_173fd2149a42804ca75fef211b8a8365fc25cc2987648ed9417b2c359cf3f1a6->leave($__internal_173fd2149a42804ca75fef211b8a8365fc25cc2987648ed9417b2c359cf3f1a6_prof);

    }

    // line 237
    public function block_reset_widget($context, array $blocks = array())
    {
        $__internal_bc5994a5cac0e744b434e5881642c997a7214c51cd1a3182b584615dd7953a88 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc5994a5cac0e744b434e5881642c997a7214c51cd1a3182b584615dd7953a88->enter($__internal_bc5994a5cac0e744b434e5881642c997a7214c51cd1a3182b584615dd7953a88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_widget"));

        $__internal_f9bd90a1147b0efb28a1567e074aa6cd3cdd13191312d33c07c8ab262667a62e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9bd90a1147b0efb28a1567e074aa6cd3cdd13191312d33c07c8ab262667a62e->enter($__internal_f9bd90a1147b0efb28a1567e074aa6cd3cdd13191312d33c07c8ab262667a62e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_widget"));

        // line 238
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 238, $this->getSourceContext()); })()), "reset")) : ("reset"));
        // line 239
        $this->displayBlock("button_widget", $context, $blocks);
        
        $__internal_f9bd90a1147b0efb28a1567e074aa6cd3cdd13191312d33c07c8ab262667a62e->leave($__internal_f9bd90a1147b0efb28a1567e074aa6cd3cdd13191312d33c07c8ab262667a62e_prof);

        
        $__internal_bc5994a5cac0e744b434e5881642c997a7214c51cd1a3182b584615dd7953a88->leave($__internal_bc5994a5cac0e744b434e5881642c997a7214c51cd1a3182b584615dd7953a88_prof);

    }

    // line 242
    public function block_tel_widget($context, array $blocks = array())
    {
        $__internal_211c1d2c17bae24535a96bae9027d1560f84f392a47da795beb85bd152bb0601 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_211c1d2c17bae24535a96bae9027d1560f84f392a47da795beb85bd152bb0601->enter($__internal_211c1d2c17bae24535a96bae9027d1560f84f392a47da795beb85bd152bb0601_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tel_widget"));

        $__internal_60ed2d48e227109de934c200e628285d65583bbba72713b9de3dbf0d225d6bca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60ed2d48e227109de934c200e628285d65583bbba72713b9de3dbf0d225d6bca->enter($__internal_60ed2d48e227109de934c200e628285d65583bbba72713b9de3dbf0d225d6bca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tel_widget"));

        // line 243
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 243, $this->getSourceContext()); })()), "tel")) : ("tel"));
        // line 244
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_60ed2d48e227109de934c200e628285d65583bbba72713b9de3dbf0d225d6bca->leave($__internal_60ed2d48e227109de934c200e628285d65583bbba72713b9de3dbf0d225d6bca_prof);

        
        $__internal_211c1d2c17bae24535a96bae9027d1560f84f392a47da795beb85bd152bb0601->leave($__internal_211c1d2c17bae24535a96bae9027d1560f84f392a47da795beb85bd152bb0601_prof);

    }

    // line 247
    public function block_color_widget($context, array $blocks = array())
    {
        $__internal_d6d9209c1e02780ca54e89dc1369957bdcf0d8997e90d13efe2b0b9b4a71a281 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d6d9209c1e02780ca54e89dc1369957bdcf0d8997e90d13efe2b0b9b4a71a281->enter($__internal_d6d9209c1e02780ca54e89dc1369957bdcf0d8997e90d13efe2b0b9b4a71a281_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "color_widget"));

        $__internal_87b3bbee8654591af7bd23485a91f76598a96ad3829eab960751cb4c8bc3ee1b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87b3bbee8654591af7bd23485a91f76598a96ad3829eab960751cb4c8bc3ee1b->enter($__internal_87b3bbee8654591af7bd23485a91f76598a96ad3829eab960751cb4c8bc3ee1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "color_widget"));

        // line 248
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 248, $this->getSourceContext()); })()), "color")) : ("color"));
        // line 249
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_87b3bbee8654591af7bd23485a91f76598a96ad3829eab960751cb4c8bc3ee1b->leave($__internal_87b3bbee8654591af7bd23485a91f76598a96ad3829eab960751cb4c8bc3ee1b_prof);

        
        $__internal_d6d9209c1e02780ca54e89dc1369957bdcf0d8997e90d13efe2b0b9b4a71a281->leave($__internal_d6d9209c1e02780ca54e89dc1369957bdcf0d8997e90d13efe2b0b9b4a71a281_prof);

    }

    // line 254
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_053044bee4201b3b7f9ce9bcda17ef0e63c4681ff33e55e7b6465d258e5d5cb2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_053044bee4201b3b7f9ce9bcda17ef0e63c4681ff33e55e7b6465d258e5d5cb2->enter($__internal_053044bee4201b3b7f9ce9bcda17ef0e63c4681ff33e55e7b6465d258e5d5cb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_760aae575f49a125344be1a4802c432a137a56dcf025553eeae97628d294321b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_760aae575f49a125344be1a4802c432a137a56dcf025553eeae97628d294321b->enter($__internal_760aae575f49a125344be1a4802c432a137a56dcf025553eeae97628d294321b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 255
        if ( !((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 255, $this->getSourceContext()); })()) === false)) {
            // line 256
            if ( !(isset($context["compound"]) || array_key_exists("compound", $context) ? $context["compound"] : (function () { throw new Twig_Error_Runtime('Variable "compound" does not exist.', 256, $this->getSourceContext()); })())) {
                // line 257
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 257, $this->getSourceContext()); })()), array("for" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 257, $this->getSourceContext()); })())));
            }
            // line 259
            if ((isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new Twig_Error_Runtime('Variable "required" does not exist.', 259, $this->getSourceContext()); })())) {
                // line 260
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 260, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " required"))));
            }
            // line 262
            if (twig_test_empty((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 262, $this->getSourceContext()); })()))) {
                // line 263
                if ( !twig_test_empty((isset($context["label_format"]) || array_key_exists("label_format", $context) ? $context["label_format"] : (function () { throw new Twig_Error_Runtime('Variable "label_format" does not exist.', 263, $this->getSourceContext()); })()))) {
                    // line 264
                    $context["label"] = twig_replace_filter((isset($context["label_format"]) || array_key_exists("label_format", $context) ? $context["label_format"] : (function () { throw new Twig_Error_Runtime('Variable "label_format" does not exist.', 264, $this->getSourceContext()); })()), array("%name%" =>                     // line 265
(isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 265, $this->getSourceContext()); })()), "%id%" =>                     // line 266
(isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 266, $this->getSourceContext()); })())));
                } else {
                    // line 269
                    $context["label"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize((isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 269, $this->getSourceContext()); })()));
                }
            }
            // line 272
            echo "<";
            echo twig_escape_filter($this->env, ((array_key_exists("element", $context)) ? (_twig_default_filter((isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new Twig_Error_Runtime('Variable "element" does not exist.', 272, $this->getSourceContext()); })()), "label")) : ("label")), "html", null, true);
            if ((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 272, $this->getSourceContext()); })())) {
                $__internal_4b90c8f1a2100fe18c62010a95ae3fd95b960b6532a4287ffc556d7f70868211 = array("attr" => (isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 272, $this->getSourceContext()); })()));
                if (!is_array($__internal_4b90c8f1a2100fe18c62010a95ae3fd95b960b6532a4287ffc556d7f70868211)) {
                    throw new Twig_Error_Runtime('Variables passed to the "with" tag must be a hash.');
                }
                $context['_parent'] = $context;
                $context = array_merge($context, $__internal_4b90c8f1a2100fe18c62010a95ae3fd95b960b6532a4287ffc556d7f70868211);
                $this->displayBlock("attributes", $context, $blocks);
                $context = $context['_parent'];
            }
            echo ">";
            echo twig_escape_filter($this->env, ((((isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 272, $this->getSourceContext()); })()) === false)) ? ((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 272, $this->getSourceContext()); })())) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 272, $this->getSourceContext()); })()), array(), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 272, $this->getSourceContext()); })())))), "html", null, true);
            echo "</";
            echo twig_escape_filter($this->env, ((array_key_exists("element", $context)) ? (_twig_default_filter((isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new Twig_Error_Runtime('Variable "element" does not exist.', 272, $this->getSourceContext()); })()), "label")) : ("label")), "html", null, true);
            echo ">";
        }
        
        $__internal_760aae575f49a125344be1a4802c432a137a56dcf025553eeae97628d294321b->leave($__internal_760aae575f49a125344be1a4802c432a137a56dcf025553eeae97628d294321b_prof);

        
        $__internal_053044bee4201b3b7f9ce9bcda17ef0e63c4681ff33e55e7b6465d258e5d5cb2->leave($__internal_053044bee4201b3b7f9ce9bcda17ef0e63c4681ff33e55e7b6465d258e5d5cb2_prof);

    }

    // line 276
    public function block_button_label($context, array $blocks = array())
    {
        $__internal_b64af17c2b2844ceed1b14b2a85fd23786a3c0213fcb094014dda369e04c4851 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b64af17c2b2844ceed1b14b2a85fd23786a3c0213fcb094014dda369e04c4851->enter($__internal_b64af17c2b2844ceed1b14b2a85fd23786a3c0213fcb094014dda369e04c4851_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_label"));

        $__internal_4cfc2839502b320912e217a491adc3c28373c6215a5bc4fdd718a7510b69f12b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4cfc2839502b320912e217a491adc3c28373c6215a5bc4fdd718a7510b69f12b->enter($__internal_4cfc2839502b320912e217a491adc3c28373c6215a5bc4fdd718a7510b69f12b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_label"));

        
        $__internal_4cfc2839502b320912e217a491adc3c28373c6215a5bc4fdd718a7510b69f12b->leave($__internal_4cfc2839502b320912e217a491adc3c28373c6215a5bc4fdd718a7510b69f12b_prof);

        
        $__internal_b64af17c2b2844ceed1b14b2a85fd23786a3c0213fcb094014dda369e04c4851->leave($__internal_b64af17c2b2844ceed1b14b2a85fd23786a3c0213fcb094014dda369e04c4851_prof);

    }

    // line 280
    public function block_repeated_row($context, array $blocks = array())
    {
        $__internal_6597f3eedff1e31fdcbe79bd126bc38490c43831ff4ca9932bc4a3a796697550 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6597f3eedff1e31fdcbe79bd126bc38490c43831ff4ca9932bc4a3a796697550->enter($__internal_6597f3eedff1e31fdcbe79bd126bc38490c43831ff4ca9932bc4a3a796697550_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "repeated_row"));

        $__internal_aca5731dc77f58f632c564bbae6d316878b3ddf099dc9e75b7590728304c50d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aca5731dc77f58f632c564bbae6d316878b3ddf099dc9e75b7590728304c50d7->enter($__internal_aca5731dc77f58f632c564bbae6d316878b3ddf099dc9e75b7590728304c50d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "repeated_row"));

        // line 285
        $this->displayBlock("form_rows", $context, $blocks);
        
        $__internal_aca5731dc77f58f632c564bbae6d316878b3ddf099dc9e75b7590728304c50d7->leave($__internal_aca5731dc77f58f632c564bbae6d316878b3ddf099dc9e75b7590728304c50d7_prof);

        
        $__internal_6597f3eedff1e31fdcbe79bd126bc38490c43831ff4ca9932bc4a3a796697550->leave($__internal_6597f3eedff1e31fdcbe79bd126bc38490c43831ff4ca9932bc4a3a796697550_prof);

    }

    // line 288
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_e90da052bec5e952c1c3bb5e90da3a40dadc1e45c4637dcfb1d4c77ec4834a1e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e90da052bec5e952c1c3bb5e90da3a40dadc1e45c4637dcfb1d4c77ec4834a1e->enter($__internal_e90da052bec5e952c1c3bb5e90da3a40dadc1e45c4637dcfb1d4c77ec4834a1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_793bca7401fe51d3f8e1f23696fb56c158b9c951f8100973783b0c66571795c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_793bca7401fe51d3f8e1f23696fb56c158b9c951f8100973783b0c66571795c7->enter($__internal_793bca7401fe51d3f8e1f23696fb56c158b9c951f8100973783b0c66571795c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 289
        echo "<div>";
        // line 290
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 290, $this->getSourceContext()); })()), 'label');
        // line 291
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 291, $this->getSourceContext()); })()), 'errors');
        // line 292
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 292, $this->getSourceContext()); })()), 'widget');
        // line 293
        echo "</div>";
        
        $__internal_793bca7401fe51d3f8e1f23696fb56c158b9c951f8100973783b0c66571795c7->leave($__internal_793bca7401fe51d3f8e1f23696fb56c158b9c951f8100973783b0c66571795c7_prof);

        
        $__internal_e90da052bec5e952c1c3bb5e90da3a40dadc1e45c4637dcfb1d4c77ec4834a1e->leave($__internal_e90da052bec5e952c1c3bb5e90da3a40dadc1e45c4637dcfb1d4c77ec4834a1e_prof);

    }

    // line 296
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_e18bf670a21cab0c875af6caf9cf167d9fb736eeaf87806166bf10a5e193f264 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e18bf670a21cab0c875af6caf9cf167d9fb736eeaf87806166bf10a5e193f264->enter($__internal_e18bf670a21cab0c875af6caf9cf167d9fb736eeaf87806166bf10a5e193f264_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_1d9d977925c3d34b8110ccb3e361c553451633fb33881edec23825eee7b26a71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d9d977925c3d34b8110ccb3e361c553451633fb33881edec23825eee7b26a71->enter($__internal_1d9d977925c3d34b8110ccb3e361c553451633fb33881edec23825eee7b26a71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 297
        echo "<div>";
        // line 298
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 298, $this->getSourceContext()); })()), 'widget');
        // line 299
        echo "</div>";
        
        $__internal_1d9d977925c3d34b8110ccb3e361c553451633fb33881edec23825eee7b26a71->leave($__internal_1d9d977925c3d34b8110ccb3e361c553451633fb33881edec23825eee7b26a71_prof);

        
        $__internal_e18bf670a21cab0c875af6caf9cf167d9fb736eeaf87806166bf10a5e193f264->leave($__internal_e18bf670a21cab0c875af6caf9cf167d9fb736eeaf87806166bf10a5e193f264_prof);

    }

    // line 302
    public function block_hidden_row($context, array $blocks = array())
    {
        $__internal_1587d4f1aadf5c4eac41c3ab469061d5b5eb9750c4eac747cc5cf104a3dfdc0d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1587d4f1aadf5c4eac41c3ab469061d5b5eb9750c4eac747cc5cf104a3dfdc0d->enter($__internal_1587d4f1aadf5c4eac41c3ab469061d5b5eb9750c4eac747cc5cf104a3dfdc0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        $__internal_d8ac90112f83b4f65443fd311bfd6ddaa1a0072f2072c2d67382a9e74aea5ff9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d8ac90112f83b4f65443fd311bfd6ddaa1a0072f2072c2d67382a9e74aea5ff9->enter($__internal_d8ac90112f83b4f65443fd311bfd6ddaa1a0072f2072c2d67382a9e74aea5ff9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        // line 303
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 303, $this->getSourceContext()); })()), 'widget');
        
        $__internal_d8ac90112f83b4f65443fd311bfd6ddaa1a0072f2072c2d67382a9e74aea5ff9->leave($__internal_d8ac90112f83b4f65443fd311bfd6ddaa1a0072f2072c2d67382a9e74aea5ff9_prof);

        
        $__internal_1587d4f1aadf5c4eac41c3ab469061d5b5eb9750c4eac747cc5cf104a3dfdc0d->leave($__internal_1587d4f1aadf5c4eac41c3ab469061d5b5eb9750c4eac747cc5cf104a3dfdc0d_prof);

    }

    // line 308
    public function block_form($context, array $blocks = array())
    {
        $__internal_ca329a1c58f77f043a396c5db8062c7cf7617cdcd95993a49861cf52dc546c2c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca329a1c58f77f043a396c5db8062c7cf7617cdcd95993a49861cf52dc546c2c->enter($__internal_ca329a1c58f77f043a396c5db8062c7cf7617cdcd95993a49861cf52dc546c2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        $__internal_fdf7d0060a9487ff07ac553de5404183ee6cc02c8219b54287687384a6467cd0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fdf7d0060a9487ff07ac553de5404183ee6cc02c8219b54287687384a6467cd0->enter($__internal_fdf7d0060a9487ff07ac553de5404183ee6cc02c8219b54287687384a6467cd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 309
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 309, $this->getSourceContext()); })()), 'form_start');
        // line 310
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 310, $this->getSourceContext()); })()), 'widget');
        // line 311
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 311, $this->getSourceContext()); })()), 'form_end');
        
        $__internal_fdf7d0060a9487ff07ac553de5404183ee6cc02c8219b54287687384a6467cd0->leave($__internal_fdf7d0060a9487ff07ac553de5404183ee6cc02c8219b54287687384a6467cd0_prof);

        
        $__internal_ca329a1c58f77f043a396c5db8062c7cf7617cdcd95993a49861cf52dc546c2c->leave($__internal_ca329a1c58f77f043a396c5db8062c7cf7617cdcd95993a49861cf52dc546c2c_prof);

    }

    // line 314
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_c61bb5a467ee3f85aef8ecd8bd0a605d71e3c8df5327153c70a672b4ed6fedad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c61bb5a467ee3f85aef8ecd8bd0a605d71e3c8df5327153c70a672b4ed6fedad->enter($__internal_c61bb5a467ee3f85aef8ecd8bd0a605d71e3c8df5327153c70a672b4ed6fedad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        $__internal_aa9e06793c57dbbf9462b4dbf6d55c5985d2975abb9459b595a4a1f08b267629 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa9e06793c57dbbf9462b4dbf6d55c5985d2975abb9459b595a4a1f08b267629->enter($__internal_aa9e06793c57dbbf9462b4dbf6d55c5985d2975abb9459b595a4a1f08b267629_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        // line 315
        twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 315, $this->getSourceContext()); })()), "setMethodRendered", array(), "method");
        // line 316
        $context["method"] = twig_upper_filter($this->env, (isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new Twig_Error_Runtime('Variable "method" does not exist.', 316, $this->getSourceContext()); })()));
        // line 317
        if (twig_in_filter((isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new Twig_Error_Runtime('Variable "method" does not exist.', 317, $this->getSourceContext()); })()), array(0 => "GET", 1 => "POST"))) {
            // line 318
            $context["form_method"] = (isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new Twig_Error_Runtime('Variable "method" does not exist.', 318, $this->getSourceContext()); })());
        } else {
            // line 320
            $context["form_method"] = "POST";
        }
        // line 322
        echo "<form name=\"";
        echo twig_escape_filter($this->env, (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 322, $this->getSourceContext()); })()), "html", null, true);
        echo "\" method=\"";
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, (isset($context["form_method"]) || array_key_exists("form_method", $context) ? $context["form_method"] : (function () { throw new Twig_Error_Runtime('Variable "form_method" does not exist.', 322, $this->getSourceContext()); })())), "html", null, true);
        echo "\"";
        if (((isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new Twig_Error_Runtime('Variable "action" does not exist.', 322, $this->getSourceContext()); })()) != "")) {
            echo " action=\"";
            echo twig_escape_filter($this->env, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new Twig_Error_Runtime('Variable "action" does not exist.', 322, $this->getSourceContext()); })()), "html", null, true);
            echo "\"";
        }
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 322, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            echo " ";
            echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
            echo "=\"";
            echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
            echo "\"";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        if ((isset($context["multipart"]) || array_key_exists("multipart", $context) ? $context["multipart"] : (function () { throw new Twig_Error_Runtime('Variable "multipart" does not exist.', 322, $this->getSourceContext()); })())) {
            echo " enctype=\"multipart/form-data\"";
        }
        echo ">";
        // line 323
        if (((isset($context["form_method"]) || array_key_exists("form_method", $context) ? $context["form_method"] : (function () { throw new Twig_Error_Runtime('Variable "form_method" does not exist.', 323, $this->getSourceContext()); })()) != (isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new Twig_Error_Runtime('Variable "method" does not exist.', 323, $this->getSourceContext()); })()))) {
            // line 324
            echo "<input type=\"hidden\" name=\"_method\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new Twig_Error_Runtime('Variable "method" does not exist.', 324, $this->getSourceContext()); })()), "html", null, true);
            echo "\" />";
        }
        
        $__internal_aa9e06793c57dbbf9462b4dbf6d55c5985d2975abb9459b595a4a1f08b267629->leave($__internal_aa9e06793c57dbbf9462b4dbf6d55c5985d2975abb9459b595a4a1f08b267629_prof);

        
        $__internal_c61bb5a467ee3f85aef8ecd8bd0a605d71e3c8df5327153c70a672b4ed6fedad->leave($__internal_c61bb5a467ee3f85aef8ecd8bd0a605d71e3c8df5327153c70a672b4ed6fedad_prof);

    }

    // line 328
    public function block_form_end($context, array $blocks = array())
    {
        $__internal_b53371b4c52ff95476b4ded750a71c0c1b98958a36b2a569d78b685d0a966dee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b53371b4c52ff95476b4ded750a71c0c1b98958a36b2a569d78b685d0a966dee->enter($__internal_b53371b4c52ff95476b4ded750a71c0c1b98958a36b2a569d78b685d0a966dee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_end"));

        $__internal_f01c63487c537c240385e0b3c02034d6bab48191c0f18175c478f7a987b845a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f01c63487c537c240385e0b3c02034d6bab48191c0f18175c478f7a987b845a5->enter($__internal_f01c63487c537c240385e0b3c02034d6bab48191c0f18175c478f7a987b845a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_end"));

        // line 329
        if (( !array_key_exists("render_rest", $context) || (isset($context["render_rest"]) || array_key_exists("render_rest", $context) ? $context["render_rest"] : (function () { throw new Twig_Error_Runtime('Variable "render_rest" does not exist.', 329, $this->getSourceContext()); })()))) {
            // line 330
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 330, $this->getSourceContext()); })()), 'rest');
        }
        // line 332
        echo "</form>";
        
        $__internal_f01c63487c537c240385e0b3c02034d6bab48191c0f18175c478f7a987b845a5->leave($__internal_f01c63487c537c240385e0b3c02034d6bab48191c0f18175c478f7a987b845a5_prof);

        
        $__internal_b53371b4c52ff95476b4ded750a71c0c1b98958a36b2a569d78b685d0a966dee->leave($__internal_b53371b4c52ff95476b4ded750a71c0c1b98958a36b2a569d78b685d0a966dee_prof);

    }

    // line 335
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_50edfc2d0af60c12127a08ec140bd88e832bc915e5d43fa1f4fb556ed33aa0d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_50edfc2d0af60c12127a08ec140bd88e832bc915e5d43fa1f4fb556ed33aa0d9->enter($__internal_50edfc2d0af60c12127a08ec140bd88e832bc915e5d43fa1f4fb556ed33aa0d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_c0ff39bc0048e9ce9c93d70b913d58248519694cab7c5c881c7cff86a502d20b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0ff39bc0048e9ce9c93d70b913d58248519694cab7c5c881c7cff86a502d20b->enter($__internal_c0ff39bc0048e9ce9c93d70b913d58248519694cab7c5c881c7cff86a502d20b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 336
        if ((twig_length_filter($this->env, (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new Twig_Error_Runtime('Variable "errors" does not exist.', 336, $this->getSourceContext()); })())) > 0)) {
            // line 337
            echo "<ul>";
            // line 338
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new Twig_Error_Runtime('Variable "errors" does not exist.', 338, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 339
                echo "<li>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["error"], "message", array()), "html", null, true);
                echo "</li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 341
            echo "</ul>";
        }
        
        $__internal_c0ff39bc0048e9ce9c93d70b913d58248519694cab7c5c881c7cff86a502d20b->leave($__internal_c0ff39bc0048e9ce9c93d70b913d58248519694cab7c5c881c7cff86a502d20b_prof);

        
        $__internal_50edfc2d0af60c12127a08ec140bd88e832bc915e5d43fa1f4fb556ed33aa0d9->leave($__internal_50edfc2d0af60c12127a08ec140bd88e832bc915e5d43fa1f4fb556ed33aa0d9_prof);

    }

    // line 345
    public function block_form_rest($context, array $blocks = array())
    {
        $__internal_f7e98e5ff9757eeabde7f529c7c8c1210870d1a70adb92a8bb2214db02213944 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f7e98e5ff9757eeabde7f529c7c8c1210870d1a70adb92a8bb2214db02213944->enter($__internal_f7e98e5ff9757eeabde7f529c7c8c1210870d1a70adb92a8bb2214db02213944_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_rest"));

        $__internal_fe296a017858b8614e7a93b4a285b7e1655e175c82f651e6cc4df925179fbd08 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe296a017858b8614e7a93b4a285b7e1655e175c82f651e6cc4df925179fbd08->enter($__internal_fe296a017858b8614e7a93b4a285b7e1655e175c82f651e6cc4df925179fbd08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_rest"));

        // line 346
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 346, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 347
            if ( !twig_get_attribute($this->env, $this->getSourceContext(), $context["child"], "rendered", array())) {
                // line 348
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'row');
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 352
        if (( !twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 352, $this->getSourceContext()); })()), "methodRendered", array()) && Symfony\Bridge\Twig\Extension\twig_is_root_form((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 352, $this->getSourceContext()); })())))) {
            // line 353
            twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 353, $this->getSourceContext()); })()), "setMethodRendered", array(), "method");
            // line 354
            $context["method"] = twig_upper_filter($this->env, (isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new Twig_Error_Runtime('Variable "method" does not exist.', 354, $this->getSourceContext()); })()));
            // line 355
            if (twig_in_filter((isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new Twig_Error_Runtime('Variable "method" does not exist.', 355, $this->getSourceContext()); })()), array(0 => "GET", 1 => "POST"))) {
                // line 356
                $context["form_method"] = (isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new Twig_Error_Runtime('Variable "method" does not exist.', 356, $this->getSourceContext()); })());
            } else {
                // line 358
                $context["form_method"] = "POST";
            }
            // line 361
            if (((isset($context["form_method"]) || array_key_exists("form_method", $context) ? $context["form_method"] : (function () { throw new Twig_Error_Runtime('Variable "form_method" does not exist.', 361, $this->getSourceContext()); })()) != (isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new Twig_Error_Runtime('Variable "method" does not exist.', 361, $this->getSourceContext()); })()))) {
                // line 362
                echo "<input type=\"hidden\" name=\"_method\" value=\"";
                echo twig_escape_filter($this->env, (isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new Twig_Error_Runtime('Variable "method" does not exist.', 362, $this->getSourceContext()); })()), "html", null, true);
                echo "\" />";
            }
        }
        
        $__internal_fe296a017858b8614e7a93b4a285b7e1655e175c82f651e6cc4df925179fbd08->leave($__internal_fe296a017858b8614e7a93b4a285b7e1655e175c82f651e6cc4df925179fbd08_prof);

        
        $__internal_f7e98e5ff9757eeabde7f529c7c8c1210870d1a70adb92a8bb2214db02213944->leave($__internal_f7e98e5ff9757eeabde7f529c7c8c1210870d1a70adb92a8bb2214db02213944_prof);

    }

    // line 369
    public function block_form_rows($context, array $blocks = array())
    {
        $__internal_ad6e733f37787f0f999751f7bf35041aca3e1b173802517ac1d5f75ec15c4d6d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad6e733f37787f0f999751f7bf35041aca3e1b173802517ac1d5f75ec15c4d6d->enter($__internal_ad6e733f37787f0f999751f7bf35041aca3e1b173802517ac1d5f75ec15c4d6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_rows"));

        $__internal_e28536f9ee5ed1c12d2c3d15d4caea39c334a154594f2e576a957f67cb151030 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e28536f9ee5ed1c12d2c3d15d4caea39c334a154594f2e576a957f67cb151030->enter($__internal_e28536f9ee5ed1c12d2c3d15d4caea39c334a154594f2e576a957f67cb151030_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_rows"));

        // line 370
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 370, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 371
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'row');
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_e28536f9ee5ed1c12d2c3d15d4caea39c334a154594f2e576a957f67cb151030->leave($__internal_e28536f9ee5ed1c12d2c3d15d4caea39c334a154594f2e576a957f67cb151030_prof);

        
        $__internal_ad6e733f37787f0f999751f7bf35041aca3e1b173802517ac1d5f75ec15c4d6d->leave($__internal_ad6e733f37787f0f999751f7bf35041aca3e1b173802517ac1d5f75ec15c4d6d_prof);

    }

    // line 375
    public function block_widget_attributes($context, array $blocks = array())
    {
        $__internal_c0f889c987cf771352bdbdd955e1c49e3bd94423fcaf1ac7ccf7dadaeeb46560 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c0f889c987cf771352bdbdd955e1c49e3bd94423fcaf1ac7ccf7dadaeeb46560->enter($__internal_c0f889c987cf771352bdbdd955e1c49e3bd94423fcaf1ac7ccf7dadaeeb46560_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widget_attributes"));

        $__internal_e8b055c1ba009395bc5ec61fd3eb3dad71eb34d70defedff3840737100126616 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8b055c1ba009395bc5ec61fd3eb3dad71eb34d70defedff3840737100126616->enter($__internal_e8b055c1ba009395bc5ec61fd3eb3dad71eb34d70defedff3840737100126616_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widget_attributes"));

        // line 376
        echo "id=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 376, $this->getSourceContext()); })()), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, (isset($context["full_name"]) || array_key_exists("full_name", $context) ? $context["full_name"] : (function () { throw new Twig_Error_Runtime('Variable "full_name" does not exist.', 376, $this->getSourceContext()); })()), "html", null, true);
        echo "\"";
        // line 377
        if ((isset($context["disabled"]) || array_key_exists("disabled", $context) ? $context["disabled"] : (function () { throw new Twig_Error_Runtime('Variable "disabled" does not exist.', 377, $this->getSourceContext()); })())) {
            echo " disabled=\"disabled\"";
        }
        // line 378
        if ((isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new Twig_Error_Runtime('Variable "required" does not exist.', 378, $this->getSourceContext()); })())) {
            echo " required=\"required\"";
        }
        // line 379
        $this->displayBlock("attributes", $context, $blocks);
        
        $__internal_e8b055c1ba009395bc5ec61fd3eb3dad71eb34d70defedff3840737100126616->leave($__internal_e8b055c1ba009395bc5ec61fd3eb3dad71eb34d70defedff3840737100126616_prof);

        
        $__internal_c0f889c987cf771352bdbdd955e1c49e3bd94423fcaf1ac7ccf7dadaeeb46560->leave($__internal_c0f889c987cf771352bdbdd955e1c49e3bd94423fcaf1ac7ccf7dadaeeb46560_prof);

    }

    // line 382
    public function block_widget_container_attributes($context, array $blocks = array())
    {
        $__internal_0edd4676f297e6058e375e16adff8945ae309b5a99c062bc50e73712742fbf4e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0edd4676f297e6058e375e16adff8945ae309b5a99c062bc50e73712742fbf4e->enter($__internal_0edd4676f297e6058e375e16adff8945ae309b5a99c062bc50e73712742fbf4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widget_container_attributes"));

        $__internal_bfea42cad97f50dafdee8139294a4efacbbf5f4d9eadc3e78c466ad36914dc77 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bfea42cad97f50dafdee8139294a4efacbbf5f4d9eadc3e78c466ad36914dc77->enter($__internal_bfea42cad97f50dafdee8139294a4efacbbf5f4d9eadc3e78c466ad36914dc77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widget_container_attributes"));

        // line 383
        if ( !twig_test_empty((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 383, $this->getSourceContext()); })()))) {
            echo "id=\"";
            echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 383, $this->getSourceContext()); })()), "html", null, true);
            echo "\"";
        }
        // line 384
        $this->displayBlock("attributes", $context, $blocks);
        
        $__internal_bfea42cad97f50dafdee8139294a4efacbbf5f4d9eadc3e78c466ad36914dc77->leave($__internal_bfea42cad97f50dafdee8139294a4efacbbf5f4d9eadc3e78c466ad36914dc77_prof);

        
        $__internal_0edd4676f297e6058e375e16adff8945ae309b5a99c062bc50e73712742fbf4e->leave($__internal_0edd4676f297e6058e375e16adff8945ae309b5a99c062bc50e73712742fbf4e_prof);

    }

    // line 387
    public function block_button_attributes($context, array $blocks = array())
    {
        $__internal_bbcdebbd71be534d799f43c1918e6a8d70ffb0d38e447728674d70af8e1331c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bbcdebbd71be534d799f43c1918e6a8d70ffb0d38e447728674d70af8e1331c7->enter($__internal_bbcdebbd71be534d799f43c1918e6a8d70ffb0d38e447728674d70af8e1331c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_attributes"));

        $__internal_9ac14a2ace35e6d02c3b7d8963c98252a4fd90dfe0cb776857ec7b8ad5bb4893 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ac14a2ace35e6d02c3b7d8963c98252a4fd90dfe0cb776857ec7b8ad5bb4893->enter($__internal_9ac14a2ace35e6d02c3b7d8963c98252a4fd90dfe0cb776857ec7b8ad5bb4893_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_attributes"));

        // line 388
        echo "id=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 388, $this->getSourceContext()); })()), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, (isset($context["full_name"]) || array_key_exists("full_name", $context) ? $context["full_name"] : (function () { throw new Twig_Error_Runtime('Variable "full_name" does not exist.', 388, $this->getSourceContext()); })()), "html", null, true);
        echo "\"";
        if ((isset($context["disabled"]) || array_key_exists("disabled", $context) ? $context["disabled"] : (function () { throw new Twig_Error_Runtime('Variable "disabled" does not exist.', 388, $this->getSourceContext()); })())) {
            echo " disabled=\"disabled\"";
        }
        // line 389
        $this->displayBlock("attributes", $context, $blocks);
        
        $__internal_9ac14a2ace35e6d02c3b7d8963c98252a4fd90dfe0cb776857ec7b8ad5bb4893->leave($__internal_9ac14a2ace35e6d02c3b7d8963c98252a4fd90dfe0cb776857ec7b8ad5bb4893_prof);

        
        $__internal_bbcdebbd71be534d799f43c1918e6a8d70ffb0d38e447728674d70af8e1331c7->leave($__internal_bbcdebbd71be534d799f43c1918e6a8d70ffb0d38e447728674d70af8e1331c7_prof);

    }

    // line 392
    public function block_attributes($context, array $blocks = array())
    {
        $__internal_eefffa8f06270b1294e05845d75abf7a9c3c965edfa1e31f101a88181c5d9916 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eefffa8f06270b1294e05845d75abf7a9c3c965edfa1e31f101a88181c5d9916->enter($__internal_eefffa8f06270b1294e05845d75abf7a9c3c965edfa1e31f101a88181c5d9916_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "attributes"));

        $__internal_41e4194180a64e72cdbacec9fe86f1be67ba35f2adb528adb2a7e6b4884f8985 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41e4194180a64e72cdbacec9fe86f1be67ba35f2adb528adb2a7e6b4884f8985->enter($__internal_41e4194180a64e72cdbacec9fe86f1be67ba35f2adb528adb2a7e6b4884f8985_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "attributes"));

        // line 393
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 393, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            // line 394
            echo " ";
            // line 395
            if (twig_in_filter($context["attrname"], array(0 => "placeholder", 1 => "title"))) {
                // line 396
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, ((((isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 396, $this->getSourceContext()); })()) === false)) ? ($context["attrvalue"]) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["attrvalue"], array(), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 396, $this->getSourceContext()); })())))), "html", null, true);
                echo "\"";
            } elseif ((            // line 397
$context["attrvalue"] === true)) {
                // line 398
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "\"";
            } elseif ( !(            // line 399
$context["attrvalue"] === false)) {
                // line 400
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_41e4194180a64e72cdbacec9fe86f1be67ba35f2adb528adb2a7e6b4884f8985->leave($__internal_41e4194180a64e72cdbacec9fe86f1be67ba35f2adb528adb2a7e6b4884f8985_prof);

        
        $__internal_eefffa8f06270b1294e05845d75abf7a9c3c965edfa1e31f101a88181c5d9916->leave($__internal_eefffa8f06270b1294e05845d75abf7a9c3c965edfa1e31f101a88181c5d9916_prof);

    }

    public function getTemplateName()
    {
        return "form_div_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  1654 => 400,  1652 => 399,  1647 => 398,  1645 => 397,  1640 => 396,  1638 => 395,  1636 => 394,  1632 => 393,  1623 => 392,  1613 => 389,  1604 => 388,  1595 => 387,  1585 => 384,  1579 => 383,  1570 => 382,  1560 => 379,  1556 => 378,  1552 => 377,  1546 => 376,  1537 => 375,  1523 => 371,  1519 => 370,  1510 => 369,  1496 => 362,  1494 => 361,  1491 => 358,  1488 => 356,  1486 => 355,  1484 => 354,  1482 => 353,  1480 => 352,  1473 => 348,  1471 => 347,  1467 => 346,  1458 => 345,  1447 => 341,  1439 => 339,  1435 => 338,  1433 => 337,  1431 => 336,  1422 => 335,  1412 => 332,  1409 => 330,  1407 => 329,  1398 => 328,  1385 => 324,  1383 => 323,  1356 => 322,  1353 => 320,  1350 => 318,  1348 => 317,  1346 => 316,  1344 => 315,  1335 => 314,  1325 => 311,  1323 => 310,  1321 => 309,  1312 => 308,  1302 => 303,  1293 => 302,  1283 => 299,  1281 => 298,  1279 => 297,  1270 => 296,  1260 => 293,  1258 => 292,  1256 => 291,  1254 => 290,  1252 => 289,  1243 => 288,  1233 => 285,  1224 => 280,  1207 => 276,  1180 => 272,  1176 => 269,  1173 => 266,  1172 => 265,  1171 => 264,  1169 => 263,  1167 => 262,  1164 => 260,  1162 => 259,  1159 => 257,  1157 => 256,  1155 => 255,  1146 => 254,  1136 => 249,  1134 => 248,  1125 => 247,  1115 => 244,  1113 => 243,  1104 => 242,  1094 => 239,  1092 => 238,  1083 => 237,  1073 => 234,  1071 => 233,  1062 => 232,  1046 => 229,  1042 => 226,  1039 => 223,  1038 => 222,  1037 => 221,  1035 => 220,  1033 => 219,  1024 => 218,  1014 => 215,  1012 => 214,  1003 => 213,  993 => 210,  991 => 209,  982 => 208,  972 => 205,  970 => 204,  961 => 203,  951 => 200,  949 => 199,  940 => 198,  929 => 195,  927 => 194,  918 => 193,  908 => 190,  906 => 189,  897 => 188,  887 => 185,  885 => 184,  876 => 183,  866 => 180,  857 => 179,  847 => 176,  845 => 175,  836 => 174,  826 => 171,  824 => 170,  815 => 168,  804 => 164,  800 => 163,  796 => 160,  790 => 159,  784 => 158,  778 => 157,  772 => 156,  766 => 155,  760 => 154,  754 => 153,  749 => 149,  743 => 148,  737 => 147,  731 => 146,  725 => 145,  719 => 144,  713 => 143,  707 => 142,  701 => 139,  699 => 138,  695 => 137,  692 => 135,  690 => 134,  681 => 133,  670 => 129,  660 => 128,  655 => 127,  653 => 126,  650 => 124,  648 => 123,  639 => 122,  628 => 118,  626 => 116,  625 => 115,  624 => 114,  623 => 113,  619 => 112,  616 => 110,  614 => 109,  605 => 108,  594 => 104,  592 => 103,  590 => 102,  588 => 101,  586 => 100,  582 => 99,  579 => 97,  577 => 96,  568 => 95,  548 => 92,  539 => 91,  519 => 88,  510 => 87,  469 => 82,  466 => 80,  464 => 79,  462 => 78,  457 => 77,  455 => 76,  438 => 75,  429 => 74,  419 => 71,  417 => 70,  415 => 69,  409 => 66,  407 => 65,  405 => 64,  403 => 63,  401 => 62,  392 => 60,  390 => 59,  383 => 58,  380 => 56,  378 => 55,  369 => 54,  359 => 51,  353 => 49,  351 => 48,  347 => 47,  343 => 46,  334 => 45,  323 => 41,  320 => 39,  318 => 38,  309 => 37,  295 => 34,  286 => 33,  276 => 30,  273 => 28,  271 => 27,  262 => 26,  252 => 23,  250 => 22,  248 => 21,  245 => 19,  243 => 18,  239 => 17,  230 => 16,  210 => 13,  208 => 12,  199 => 11,  188 => 7,  185 => 5,  183 => 4,  174 => 3,  164 => 392,  162 => 387,  160 => 382,  158 => 375,  156 => 369,  153 => 366,  151 => 345,  149 => 335,  147 => 328,  145 => 314,  143 => 308,  141 => 302,  139 => 296,  137 => 288,  135 => 280,  133 => 276,  131 => 254,  129 => 247,  127 => 242,  125 => 237,  123 => 232,  121 => 218,  119 => 213,  117 => 208,  115 => 203,  113 => 198,  111 => 193,  109 => 188,  107 => 183,  105 => 179,  103 => 174,  101 => 168,  99 => 133,  97 => 122,  95 => 108,  93 => 95,  91 => 91,  89 => 87,  87 => 74,  85 => 54,  83 => 45,  81 => 37,  79 => 33,  77 => 26,  75 => 16,  73 => 11,  71 => 3,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# Widgets #}

{%- block form_widget -%}
    {% if compound %}
        {{- block('form_widget_compound') -}}
    {% else %}
        {{- block('form_widget_simple') -}}
    {% endif %}
{%- endblock form_widget -%}

{%- block form_widget_simple -%}
    {%- set type = type|default('text') -%}
    <input type=\"{{ type }}\" {{ block('widget_attributes') }} {% if value is not empty %}value=\"{{ value }}\" {% endif %}/>
{%- endblock form_widget_simple -%}

{%- block form_widget_compound -%}
    <div {{ block('widget_container_attributes') }}>
        {%- if form is rootform -%}
            {{ form_errors(form) }}
        {%- endif -%}
        {{- block('form_rows') -}}
        {{- form_rest(form) -}}
    </div>
{%- endblock form_widget_compound -%}

{%- block collection_widget -%}
    {% if prototype is defined %}
        {%- set attr = attr|merge({'data-prototype': form_row(prototype) }) -%}
    {% endif %}
    {{- block('form_widget') -}}
{%- endblock collection_widget -%}

{%- block textarea_widget -%}
    <textarea {{ block('widget_attributes') }}>{{ value }}</textarea>
{%- endblock textarea_widget -%}

{%- block choice_widget -%}
    {% if expanded %}
        {{- block('choice_widget_expanded') -}}
    {% else %}
        {{- block('choice_widget_collapsed') -}}
    {% endif %}
{%- endblock choice_widget -%}

{%- block choice_widget_expanded -%}
    <div {{ block('widget_container_attributes') }}>
    {%- for child in form %}
        {{- form_widget(child) -}}
        {{- form_label(child, null, {translation_domain: choice_translation_domain}) -}}
    {% endfor -%}
    </div>
{%- endblock choice_widget_expanded -%}

{%- block choice_widget_collapsed -%}
    {%- if required and placeholder is none and not placeholder_in_choices and not multiple and (attr.size is not defined or attr.size <= 1) -%}
        {% set required = false %}
    {%- endif -%}
    <select {{ block('widget_attributes') }}{% if multiple %} multiple=\"multiple\"{% endif %}>
        {%- if placeholder is not none -%}
            <option value=\"\"{% if required and value is empty %} selected=\"selected\"{% endif %}>{{ placeholder != '' ? (translation_domain is same as(false) ? placeholder : placeholder|trans({}, translation_domain)) }}</option>
        {%- endif -%}
        {%- if preferred_choices|length > 0 -%}
            {% set options = preferred_choices %}
            {{- block('choice_widget_options') -}}
            {%- if choices|length > 0 and separator is not none -%}
                <option disabled=\"disabled\">{{ separator }}</option>
            {%- endif -%}
        {%- endif -%}
        {%- set options = choices -%}
        {{- block('choice_widget_options') -}}
    </select>
{%- endblock choice_widget_collapsed -%}

{%- block choice_widget_options -%}
    {% for group_label, choice in options %}
        {%- if choice is iterable -%}
            <optgroup label=\"{{ choice_translation_domain is same as(false) ? group_label : group_label|trans({}, choice_translation_domain) }}\">
                {% set options = choice %}
                {{- block('choice_widget_options') -}}
            </optgroup>
        {%- else -%}
            <option value=\"{{ choice.value }}\"{% if choice.attr %}{% with { attr: choice.attr } %}{{ block('attributes') }}{% endwith %}{% endif %}{% if choice is selectedchoice(value) %} selected=\"selected\"{% endif %}>{{ choice_translation_domain is same as(false) ? choice.label : choice.label|trans({}, choice_translation_domain) }}</option>
        {%- endif -%}
    {% endfor %}
{%- endblock choice_widget_options -%}

{%- block checkbox_widget -%}
    <input type=\"checkbox\" {{ block('widget_attributes') }}{% if value is defined %} value=\"{{ value }}\"{% endif %}{% if checked %} checked=\"checked\"{% endif %} />
{%- endblock checkbox_widget -%}

{%- block radio_widget -%}
    <input type=\"radio\" {{ block('widget_attributes') }}{% if value is defined %} value=\"{{ value }}\"{% endif %}{% if checked %} checked=\"checked\"{% endif %} />
{%- endblock radio_widget -%}

{%- block datetime_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {%- else -%}
        <div {{ block('widget_container_attributes') }}>
            {{- form_errors(form.date) -}}
            {{- form_errors(form.time) -}}
            {{- form_widget(form.date) -}}
            {{- form_widget(form.time) -}}
        </div>
    {%- endif -%}
{%- endblock datetime_widget -%}

{%- block date_widget -%}
    {%- if widget == 'single_text' -%}
        {{ block('form_widget_simple') }}
    {%- else -%}
        <div {{ block('widget_container_attributes') }}>
            {{- date_pattern|replace({
                '{{ year }}':  form_widget(form.year),
                '{{ month }}': form_widget(form.month),
                '{{ day }}':   form_widget(form.day),
            })|raw -}}
        </div>
    {%- endif -%}
{%- endblock date_widget -%}

{%- block time_widget -%}
    {%- if widget == 'single_text' -%}
        {{ block('form_widget_simple') }}
    {%- else -%}
        {%- set vars = widget == 'text' ? { 'attr': { 'size': 1 }} : {} -%}
        <div {{ block('widget_container_attributes') }}>
            {{ form_widget(form.hour, vars) }}{% if with_minutes %}:{{ form_widget(form.minute, vars) }}{% endif %}{% if with_seconds %}:{{ form_widget(form.second, vars) }}{% endif %}
        </div>
    {%- endif -%}
{%- endblock time_widget -%}

{%- block dateinterval_widget -%}
    {%- if widget == 'single_text' -%}
        {{- block('form_widget_simple') -}}
    {%- else -%}
        <div {{ block('widget_container_attributes') }}>
            {{- form_errors(form) -}}
            <table class=\"{{ table_class|default('') }}\">
                <thead>
                    <tr>
                        {%- if with_years %}<th>{{ form_label(form.years) }}</th>{% endif -%}
                        {%- if with_months %}<th>{{ form_label(form.months) }}</th>{% endif -%}
                        {%- if with_weeks %}<th>{{ form_label(form.weeks) }}</th>{% endif -%}
                        {%- if with_days %}<th>{{ form_label(form.days) }}</th>{% endif -%}
                        {%- if with_hours %}<th>{{ form_label(form.hours) }}</th>{% endif -%}
                        {%- if with_minutes %}<th>{{ form_label(form.minutes) }}</th>{% endif -%}
                        {%- if with_seconds %}<th>{{ form_label(form.seconds) }}</th>{% endif -%}
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        {%- if with_years %}<td>{{ form_widget(form.years) }}</td>{% endif -%}
                        {%- if with_months %}<td>{{ form_widget(form.months) }}</td>{% endif -%}
                        {%- if with_weeks %}<td>{{ form_widget(form.weeks) }}</td>{% endif -%}
                        {%- if with_days %}<td>{{ form_widget(form.days) }}</td>{% endif -%}
                        {%- if with_hours %}<td>{{ form_widget(form.hours) }}</td>{% endif -%}
                        {%- if with_minutes %}<td>{{ form_widget(form.minutes) }}</td>{% endif -%}
                        {%- if with_seconds %}<td>{{ form_widget(form.seconds) }}</td>{% endif -%}
                    </tr>
                </tbody>
            </table>
            {%- if with_invert %}{{ form_widget(form.invert) }}{% endif -%}
        </div>
    {%- endif -%}
{%- endblock dateinterval_widget -%}

{%- block number_widget -%}
    {# type=\"number\" doesn't work with floats #}
    {%- set type = type|default('text') -%}
    {{ block('form_widget_simple') }}
{%- endblock number_widget -%}

{%- block integer_widget -%}
    {%- set type = type|default('number') -%}
    {{ block('form_widget_simple') }}
{%- endblock integer_widget -%}

{%- block money_widget -%}
    {{ money_pattern|replace({ '{{ widget }}': block('form_widget_simple') })|raw }}
{%- endblock money_widget -%}

{%- block url_widget -%}
    {%- set type = type|default('url') -%}
    {{ block('form_widget_simple') }}
{%- endblock url_widget -%}

{%- block search_widget -%}
    {%- set type = type|default('search') -%}
    {{ block('form_widget_simple') }}
{%- endblock search_widget -%}

{%- block percent_widget -%}
    {%- set type = type|default('text') -%}
    {{ block('form_widget_simple') }} %
{%- endblock percent_widget -%}

{%- block password_widget -%}
    {%- set type = type|default('password') -%}
    {{ block('form_widget_simple') }}
{%- endblock password_widget -%}

{%- block hidden_widget -%}
    {%- set type = type|default('hidden') -%}
    {{ block('form_widget_simple') }}
{%- endblock hidden_widget -%}

{%- block email_widget -%}
    {%- set type = type|default('email') -%}
    {{ block('form_widget_simple') }}
{%- endblock email_widget -%}

{%- block range_widget -%}
    {% set type = type|default('range') %}
    {{- block('form_widget_simple') -}}
{%- endblock range_widget %}

{%- block button_widget -%}
    {%- if label is not same as(false) and label is empty -%}
        {%- if label_format is not empty -%}
            {% set label = label_format|replace({
                '%name%': name,
                '%id%': id,
            }) %}
        {%- else -%}
            {% set label = name|humanize %}
        {%- endif -%}
    {%- endif -%}
    <button type=\"{{ type|default('button') }}\" {{ block('button_attributes') }}>{{ translation_domain is same as(false) ? label : label|trans({}, translation_domain) }}</button>
{%- endblock button_widget -%}

{%- block submit_widget -%}
    {%- set type = type|default('submit') -%}
    {{ block('button_widget') }}
{%- endblock submit_widget -%}

{%- block reset_widget -%}
    {%- set type = type|default('reset') -%}
    {{ block('button_widget') }}
{%- endblock reset_widget -%}

{%- block tel_widget -%}
    {%- set type = type|default('tel') -%}
    {{ block('form_widget_simple') }}
{%- endblock tel_widget -%}

{%- block color_widget -%}
    {%- set type = type|default('color') -%}
    {{ block('form_widget_simple') }}
{%- endblock color_widget -%}

{# Labels #}

{%- block form_label -%}
    {% if label is not same as(false) -%}
        {% if not compound -%}
            {% set label_attr = label_attr|merge({'for': id}) %}
        {%- endif -%}
        {% if required -%}
            {% set label_attr = label_attr|merge({'class': (label_attr.class|default('') ~ ' required')|trim}) %}
        {%- endif -%}
        {% if label is empty -%}
            {%- if label_format is not empty -%}
                {% set label = label_format|replace({
                    '%name%': name,
                    '%id%': id,
                }) %}
            {%- else -%}
                {% set label = name|humanize %}
            {%- endif -%}
        {%- endif -%}
        <{{ element|default('label') }}{% if label_attr %}{% with { attr: label_attr } %}{{ block('attributes') }}{% endwith %}{% endif %}>{{ translation_domain is same as(false) ? label : label|trans({}, translation_domain) }}</{{ element|default('label') }}>
    {%- endif -%}
{%- endblock form_label -%}

{%- block button_label -%}{%- endblock -%}

{# Rows #}

{%- block repeated_row -%}
    {#
    No need to render the errors here, as all errors are mapped
    to the first child (see RepeatedTypeValidatorExtension).
    #}
    {{- block('form_rows') -}}
{%- endblock repeated_row -%}

{%- block form_row -%}
    <div>
        {{- form_label(form) -}}
        {{- form_errors(form) -}}
        {{- form_widget(form) -}}
    </div>
{%- endblock form_row -%}

{%- block button_row -%}
    <div>
        {{- form_widget(form) -}}
    </div>
{%- endblock button_row -%}

{%- block hidden_row -%}
    {{ form_widget(form) }}
{%- endblock hidden_row -%}

{# Misc #}

{%- block form -%}
    {{ form_start(form) }}
        {{- form_widget(form) -}}
    {{ form_end(form) }}
{%- endblock form -%}

{%- block form_start -%}
    {%- do form.setMethodRendered() -%}
    {% set method = method|upper %}
    {%- if method in [\"GET\", \"POST\"] -%}
        {% set form_method = method %}
    {%- else -%}
        {% set form_method = \"POST\" %}
    {%- endif -%}
    <form name=\"{{ name }}\" method=\"{{ form_method|lower }}\"{% if action != '' %} action=\"{{ action }}\"{% endif %}{% for attrname, attrvalue in attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}{% if multipart %} enctype=\"multipart/form-data\"{% endif %}>
    {%- if form_method != method -%}
        <input type=\"hidden\" name=\"_method\" value=\"{{ method }}\" />
    {%- endif -%}
{%- endblock form_start -%}

{%- block form_end -%}
    {%- if not render_rest is defined or render_rest -%}
        {{ form_rest(form) }}
    {%- endif -%}
    </form>
{%- endblock form_end -%}

{%- block form_errors -%}
    {%- if errors|length > 0 -%}
    <ul>
        {%- for error in errors -%}
            <li>{{ error.message }}</li>
        {%- endfor -%}
    </ul>
    {%- endif -%}
{%- endblock form_errors -%}

{%- block form_rest -%}
    {% for child in form -%}
        {% if not child.rendered %}
            {{- form_row(child) -}}
        {% endif %}
    {%- endfor -%}

    {% if not form.methodRendered and form is rootform %}
        {%- do form.setMethodRendered() -%}
        {% set method = method|upper %}
        {%- if method in [\"GET\", \"POST\"] -%}
            {% set form_method = method %}
        {%- else -%}
            {% set form_method = \"POST\" %}
        {%- endif -%}

        {%- if form_method != method -%}
            <input type=\"hidden\" name=\"_method\" value=\"{{ method }}\" />
        {%- endif -%}
    {% endif -%}
{% endblock form_rest %}

{# Support #}

{%- block form_rows -%}
    {% for child in form %}
        {{- form_row(child) -}}
    {% endfor %}
{%- endblock form_rows -%}

{%- block widget_attributes -%}
    id=\"{{ id }}\" name=\"{{ full_name }}\"
    {%- if disabled %} disabled=\"disabled\"{% endif -%}
    {%- if required %} required=\"required\"{% endif -%}
    {{ block('attributes') }}
{%- endblock widget_attributes -%}

{%- block widget_container_attributes -%}
    {%- if id is not empty %}id=\"{{ id }}\"{% endif -%}
    {{ block('attributes') }}
{%- endblock widget_container_attributes -%}

{%- block button_attributes -%}
    id=\"{{ id }}\" name=\"{{ full_name }}\"{% if disabled %} disabled=\"disabled\"{% endif -%}
    {{ block('attributes') }}
{%- endblock button_attributes -%}

{% block attributes -%}
    {%- for attrname, attrvalue in attr -%}
        {{- \" \" -}}
        {%- if attrname in ['placeholder', 'title'] -%}
            {{- attrname }}=\"{{ translation_domain is same as(false) ? attrvalue : attrvalue|trans({}, translation_domain) }}\"
        {%- elseif attrvalue is same as(true) -%}
            {{- attrname }}=\"{{ attrname }}\"
        {%- elseif attrvalue is not same as(false) -%}
            {{- attrname }}=\"{{ attrvalue }}\"
        {%- endif -%}
    {%- endfor -%}
{%- endblock attributes -%}
", "form_div_layout.html.twig", "/Applications/MAMP/htdocs/allotheatre/vendor/symfony/twig-bridge/Resources/views/Form/form_div_layout.html.twig");
    }
}
