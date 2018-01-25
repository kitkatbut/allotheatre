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
        $__internal_3f6691a7a4c27e772750b9eae0019d21bcbd6559dd11e620dacce1d07883b820 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f6691a7a4c27e772750b9eae0019d21bcbd6559dd11e620dacce1d07883b820->enter($__internal_3f6691a7a4c27e772750b9eae0019d21bcbd6559dd11e620dacce1d07883b820_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_div_layout.html.twig"));

        $__internal_ff57d9d399e9e49a729b8e4565fb60cd19eaed0c2eff07f95190bf76aec09cae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff57d9d399e9e49a729b8e4565fb60cd19eaed0c2eff07f95190bf76aec09cae->enter($__internal_ff57d9d399e9e49a729b8e4565fb60cd19eaed0c2eff07f95190bf76aec09cae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_div_layout.html.twig"));

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
        
        $__internal_3f6691a7a4c27e772750b9eae0019d21bcbd6559dd11e620dacce1d07883b820->leave($__internal_3f6691a7a4c27e772750b9eae0019d21bcbd6559dd11e620dacce1d07883b820_prof);

        
        $__internal_ff57d9d399e9e49a729b8e4565fb60cd19eaed0c2eff07f95190bf76aec09cae->leave($__internal_ff57d9d399e9e49a729b8e4565fb60cd19eaed0c2eff07f95190bf76aec09cae_prof);

    }

    // line 3
    public function block_form_widget($context, array $blocks = array())
    {
        $__internal_172f666da72b5d4255e4271523f5d370e6a1613520f75a3ce7f41ddb837e417d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_172f666da72b5d4255e4271523f5d370e6a1613520f75a3ce7f41ddb837e417d->enter($__internal_172f666da72b5d4255e4271523f5d370e6a1613520f75a3ce7f41ddb837e417d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget"));

        $__internal_c007ab528e778b626427343fc56a92f36881d5ef442300a29ff46d56a1774749 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c007ab528e778b626427343fc56a92f36881d5ef442300a29ff46d56a1774749->enter($__internal_c007ab528e778b626427343fc56a92f36881d5ef442300a29ff46d56a1774749_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget"));

        // line 4
        if ((isset($context["compound"]) || array_key_exists("compound", $context) ? $context["compound"] : (function () { throw new Twig_Error_Runtime('Variable "compound" does not exist.', 4, $this->getSourceContext()); })())) {
            // line 5
            $this->displayBlock("form_widget_compound", $context, $blocks);
        } else {
            // line 7
            $this->displayBlock("form_widget_simple", $context, $blocks);
        }
        
        $__internal_c007ab528e778b626427343fc56a92f36881d5ef442300a29ff46d56a1774749->leave($__internal_c007ab528e778b626427343fc56a92f36881d5ef442300a29ff46d56a1774749_prof);

        
        $__internal_172f666da72b5d4255e4271523f5d370e6a1613520f75a3ce7f41ddb837e417d->leave($__internal_172f666da72b5d4255e4271523f5d370e6a1613520f75a3ce7f41ddb837e417d_prof);

    }

    // line 11
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_873b7f42c4b7e85aceb3723ebb53c038247097b3c22fb4f9a0ff73f21eca0dea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_873b7f42c4b7e85aceb3723ebb53c038247097b3c22fb4f9a0ff73f21eca0dea->enter($__internal_873b7f42c4b7e85aceb3723ebb53c038247097b3c22fb4f9a0ff73f21eca0dea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_f76677470bd42230e1af2b6f5f03e1816aa1f552f8b979cb111d4f15e223553f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f76677470bd42230e1af2b6f5f03e1816aa1f552f8b979cb111d4f15e223553f->enter($__internal_f76677470bd42230e1af2b6f5f03e1816aa1f552f8b979cb111d4f15e223553f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

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
        
        $__internal_f76677470bd42230e1af2b6f5f03e1816aa1f552f8b979cb111d4f15e223553f->leave($__internal_f76677470bd42230e1af2b6f5f03e1816aa1f552f8b979cb111d4f15e223553f_prof);

        
        $__internal_873b7f42c4b7e85aceb3723ebb53c038247097b3c22fb4f9a0ff73f21eca0dea->leave($__internal_873b7f42c4b7e85aceb3723ebb53c038247097b3c22fb4f9a0ff73f21eca0dea_prof);

    }

    // line 16
    public function block_form_widget_compound($context, array $blocks = array())
    {
        $__internal_4d1e36484dccaa07d97ef1b4489ca281eab3dca1cd624d003cc1fc3128069f30 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d1e36484dccaa07d97ef1b4489ca281eab3dca1cd624d003cc1fc3128069f30->enter($__internal_4d1e36484dccaa07d97ef1b4489ca281eab3dca1cd624d003cc1fc3128069f30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        $__internal_ed0fc33d501036ba7661685d22e6cc2dc4527d21704e7eb58ea3a30c6d646d19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed0fc33d501036ba7661685d22e6cc2dc4527d21704e7eb58ea3a30c6d646d19->enter($__internal_ed0fc33d501036ba7661685d22e6cc2dc4527d21704e7eb58ea3a30c6d646d19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

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
        
        $__internal_ed0fc33d501036ba7661685d22e6cc2dc4527d21704e7eb58ea3a30c6d646d19->leave($__internal_ed0fc33d501036ba7661685d22e6cc2dc4527d21704e7eb58ea3a30c6d646d19_prof);

        
        $__internal_4d1e36484dccaa07d97ef1b4489ca281eab3dca1cd624d003cc1fc3128069f30->leave($__internal_4d1e36484dccaa07d97ef1b4489ca281eab3dca1cd624d003cc1fc3128069f30_prof);

    }

    // line 26
    public function block_collection_widget($context, array $blocks = array())
    {
        $__internal_3901ef8c45e18d291e60f9e80fdebb4cc0eda44cbaaee73ab6fabb7825ed003e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3901ef8c45e18d291e60f9e80fdebb4cc0eda44cbaaee73ab6fabb7825ed003e->enter($__internal_3901ef8c45e18d291e60f9e80fdebb4cc0eda44cbaaee73ab6fabb7825ed003e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "collection_widget"));

        $__internal_2bcfe05780ba0a9065932721c379f2b96fa69d9a856e5c4ba0141d82f91f9fa9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2bcfe05780ba0a9065932721c379f2b96fa69d9a856e5c4ba0141d82f91f9fa9->enter($__internal_2bcfe05780ba0a9065932721c379f2b96fa69d9a856e5c4ba0141d82f91f9fa9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "collection_widget"));

        // line 27
        if (array_key_exists("prototype", $context)) {
            // line 28
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 28, $this->getSourceContext()); })()), array("data-prototype" => $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["prototype"]) || array_key_exists("prototype", $context) ? $context["prototype"] : (function () { throw new Twig_Error_Runtime('Variable "prototype" does not exist.', 28, $this->getSourceContext()); })()), 'row')));
        }
        // line 30
        $this->displayBlock("form_widget", $context, $blocks);
        
        $__internal_2bcfe05780ba0a9065932721c379f2b96fa69d9a856e5c4ba0141d82f91f9fa9->leave($__internal_2bcfe05780ba0a9065932721c379f2b96fa69d9a856e5c4ba0141d82f91f9fa9_prof);

        
        $__internal_3901ef8c45e18d291e60f9e80fdebb4cc0eda44cbaaee73ab6fabb7825ed003e->leave($__internal_3901ef8c45e18d291e60f9e80fdebb4cc0eda44cbaaee73ab6fabb7825ed003e_prof);

    }

    // line 33
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_ac6524618d6a9d0886c03c8f046a351e6af96eb3a9c11a7b6f7871fd80313e80 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac6524618d6a9d0886c03c8f046a351e6af96eb3a9c11a7b6f7871fd80313e80->enter($__internal_ac6524618d6a9d0886c03c8f046a351e6af96eb3a9c11a7b6f7871fd80313e80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_cb0044021bad3636f72388ad450c046326388aad05842daa72d5f9820a9f6739 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb0044021bad3636f72388ad450c046326388aad05842daa72d5f9820a9f6739->enter($__internal_cb0044021bad3636f72388ad450c046326388aad05842daa72d5f9820a9f6739_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 34
        echo "<textarea ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo ">";
        echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 34, $this->getSourceContext()); })()), "html", null, true);
        echo "</textarea>";
        
        $__internal_cb0044021bad3636f72388ad450c046326388aad05842daa72d5f9820a9f6739->leave($__internal_cb0044021bad3636f72388ad450c046326388aad05842daa72d5f9820a9f6739_prof);

        
        $__internal_ac6524618d6a9d0886c03c8f046a351e6af96eb3a9c11a7b6f7871fd80313e80->leave($__internal_ac6524618d6a9d0886c03c8f046a351e6af96eb3a9c11a7b6f7871fd80313e80_prof);

    }

    // line 37
    public function block_choice_widget($context, array $blocks = array())
    {
        $__internal_4624793d8c4c739076ca3a49154066e5e3d2d7891daf230be1825d65ff196999 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4624793d8c4c739076ca3a49154066e5e3d2d7891daf230be1825d65ff196999->enter($__internal_4624793d8c4c739076ca3a49154066e5e3d2d7891daf230be1825d65ff196999_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget"));

        $__internal_7283653816d9c7cc2e8ab3e2471d37acb797fb2c5ac52fd491837526dcc4bf5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7283653816d9c7cc2e8ab3e2471d37acb797fb2c5ac52fd491837526dcc4bf5f->enter($__internal_7283653816d9c7cc2e8ab3e2471d37acb797fb2c5ac52fd491837526dcc4bf5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget"));

        // line 38
        if ((isset($context["expanded"]) || array_key_exists("expanded", $context) ? $context["expanded"] : (function () { throw new Twig_Error_Runtime('Variable "expanded" does not exist.', 38, $this->getSourceContext()); })())) {
            // line 39
            $this->displayBlock("choice_widget_expanded", $context, $blocks);
        } else {
            // line 41
            $this->displayBlock("choice_widget_collapsed", $context, $blocks);
        }
        
        $__internal_7283653816d9c7cc2e8ab3e2471d37acb797fb2c5ac52fd491837526dcc4bf5f->leave($__internal_7283653816d9c7cc2e8ab3e2471d37acb797fb2c5ac52fd491837526dcc4bf5f_prof);

        
        $__internal_4624793d8c4c739076ca3a49154066e5e3d2d7891daf230be1825d65ff196999->leave($__internal_4624793d8c4c739076ca3a49154066e5e3d2d7891daf230be1825d65ff196999_prof);

    }

    // line 45
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_d60fb784b23214e33753dc7bc8e8af23a8abd85d38a46b967a61c65547afc575 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d60fb784b23214e33753dc7bc8e8af23a8abd85d38a46b967a61c65547afc575->enter($__internal_d60fb784b23214e33753dc7bc8e8af23a8abd85d38a46b967a61c65547afc575_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_f69b3a47db3cce95c04f4a9abf6da28c44bc6664c29ab5cb419f069f58e4de13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f69b3a47db3cce95c04f4a9abf6da28c44bc6664c29ab5cb419f069f58e4de13->enter($__internal_f69b3a47db3cce95c04f4a9abf6da28c44bc6664c29ab5cb419f069f58e4de13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

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
        
        $__internal_f69b3a47db3cce95c04f4a9abf6da28c44bc6664c29ab5cb419f069f58e4de13->leave($__internal_f69b3a47db3cce95c04f4a9abf6da28c44bc6664c29ab5cb419f069f58e4de13_prof);

        
        $__internal_d60fb784b23214e33753dc7bc8e8af23a8abd85d38a46b967a61c65547afc575->leave($__internal_d60fb784b23214e33753dc7bc8e8af23a8abd85d38a46b967a61c65547afc575_prof);

    }

    // line 54
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_b341809148fd1a46abd549a28a8aaafdee1aa800c2b31bc92e4dbbaa826687a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b341809148fd1a46abd549a28a8aaafdee1aa800c2b31bc92e4dbbaa826687a2->enter($__internal_b341809148fd1a46abd549a28a8aaafdee1aa800c2b31bc92e4dbbaa826687a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_1cf5204fee89fa7c40c5360e2873af822303eab9147610cbf5ae5d2802df9fb0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1cf5204fee89fa7c40c5360e2873af822303eab9147610cbf5ae5d2802df9fb0->enter($__internal_1cf5204fee89fa7c40c5360e2873af822303eab9147610cbf5ae5d2802df9fb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

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
        
        $__internal_1cf5204fee89fa7c40c5360e2873af822303eab9147610cbf5ae5d2802df9fb0->leave($__internal_1cf5204fee89fa7c40c5360e2873af822303eab9147610cbf5ae5d2802df9fb0_prof);

        
        $__internal_b341809148fd1a46abd549a28a8aaafdee1aa800c2b31bc92e4dbbaa826687a2->leave($__internal_b341809148fd1a46abd549a28a8aaafdee1aa800c2b31bc92e4dbbaa826687a2_prof);

    }

    // line 74
    public function block_choice_widget_options($context, array $blocks = array())
    {
        $__internal_281cb90fe84dcf5c99c9cc9afb6048375194673ead81d43fefce462927bc8bed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_281cb90fe84dcf5c99c9cc9afb6048375194673ead81d43fefce462927bc8bed->enter($__internal_281cb90fe84dcf5c99c9cc9afb6048375194673ead81d43fefce462927bc8bed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_options"));

        $__internal_8ef209722189a4a8a250a8a1b5564675c9804ff7bf963eddbccdf2b75d1fc9fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ef209722189a4a8a250a8a1b5564675c9804ff7bf963eddbccdf2b75d1fc9fd->enter($__internal_8ef209722189a4a8a250a8a1b5564675c9804ff7bf963eddbccdf2b75d1fc9fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_options"));

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
                    $__internal_a6cc53ffbdbcab59893e50e8b9d85758736450dde722dedad4759f4be95fbf5a = array("attr" => twig_get_attribute($this->env, $this->getSourceContext(), $context["choice"], "attr", array()));
                    if (!is_array($__internal_a6cc53ffbdbcab59893e50e8b9d85758736450dde722dedad4759f4be95fbf5a)) {
                        throw new Twig_Error_Runtime('Variables passed to the "with" tag must be a hash.');
                    }
                    $context['_parent'] = $context;
                    $context = array_merge($context, $__internal_a6cc53ffbdbcab59893e50e8b9d85758736450dde722dedad4759f4be95fbf5a);
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
        
        $__internal_8ef209722189a4a8a250a8a1b5564675c9804ff7bf963eddbccdf2b75d1fc9fd->leave($__internal_8ef209722189a4a8a250a8a1b5564675c9804ff7bf963eddbccdf2b75d1fc9fd_prof);

        
        $__internal_281cb90fe84dcf5c99c9cc9afb6048375194673ead81d43fefce462927bc8bed->leave($__internal_281cb90fe84dcf5c99c9cc9afb6048375194673ead81d43fefce462927bc8bed_prof);

    }

    // line 87
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_c3e1eacaa9783dd35a570d044ac24883a9e8a89b0fd2f740ef447b4c1e901483 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c3e1eacaa9783dd35a570d044ac24883a9e8a89b0fd2f740ef447b4c1e901483->enter($__internal_c3e1eacaa9783dd35a570d044ac24883a9e8a89b0fd2f740ef447b4c1e901483_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_4dae71b0db51b231944e8a8e2425096421b8db4b74a2c42c1d01ca3679a0bb7b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4dae71b0db51b231944e8a8e2425096421b8db4b74a2c42c1d01ca3679a0bb7b->enter($__internal_4dae71b0db51b231944e8a8e2425096421b8db4b74a2c42c1d01ca3679a0bb7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

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
        
        $__internal_4dae71b0db51b231944e8a8e2425096421b8db4b74a2c42c1d01ca3679a0bb7b->leave($__internal_4dae71b0db51b231944e8a8e2425096421b8db4b74a2c42c1d01ca3679a0bb7b_prof);

        
        $__internal_c3e1eacaa9783dd35a570d044ac24883a9e8a89b0fd2f740ef447b4c1e901483->leave($__internal_c3e1eacaa9783dd35a570d044ac24883a9e8a89b0fd2f740ef447b4c1e901483_prof);

    }

    // line 91
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_c5b19d702a017232bb47056202318602700afc7ce503e9f48669f1ad31c363e9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c5b19d702a017232bb47056202318602700afc7ce503e9f48669f1ad31c363e9->enter($__internal_c5b19d702a017232bb47056202318602700afc7ce503e9f48669f1ad31c363e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_11422413882b894e23074d70b3ffcb307250e00daba0c961dd6dfcad03023b0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11422413882b894e23074d70b3ffcb307250e00daba0c961dd6dfcad03023b0c->enter($__internal_11422413882b894e23074d70b3ffcb307250e00daba0c961dd6dfcad03023b0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

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
        
        $__internal_11422413882b894e23074d70b3ffcb307250e00daba0c961dd6dfcad03023b0c->leave($__internal_11422413882b894e23074d70b3ffcb307250e00daba0c961dd6dfcad03023b0c_prof);

        
        $__internal_c5b19d702a017232bb47056202318602700afc7ce503e9f48669f1ad31c363e9->leave($__internal_c5b19d702a017232bb47056202318602700afc7ce503e9f48669f1ad31c363e9_prof);

    }

    // line 95
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_b27fcfdaa2721c3a3af1499f5fb245f44969ef7d961e02e6860e5efe188fad8a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b27fcfdaa2721c3a3af1499f5fb245f44969ef7d961e02e6860e5efe188fad8a->enter($__internal_b27fcfdaa2721c3a3af1499f5fb245f44969ef7d961e02e6860e5efe188fad8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_d76cd43e81d19ece23803664dd5291ae06d019bb9eb9078dc052b9d24b8ea145 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d76cd43e81d19ece23803664dd5291ae06d019bb9eb9078dc052b9d24b8ea145->enter($__internal_d76cd43e81d19ece23803664dd5291ae06d019bb9eb9078dc052b9d24b8ea145_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

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
        
        $__internal_d76cd43e81d19ece23803664dd5291ae06d019bb9eb9078dc052b9d24b8ea145->leave($__internal_d76cd43e81d19ece23803664dd5291ae06d019bb9eb9078dc052b9d24b8ea145_prof);

        
        $__internal_b27fcfdaa2721c3a3af1499f5fb245f44969ef7d961e02e6860e5efe188fad8a->leave($__internal_b27fcfdaa2721c3a3af1499f5fb245f44969ef7d961e02e6860e5efe188fad8a_prof);

    }

    // line 108
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_226c16833d3da7128f340ab3d41f3dfb6db1563a0f3f8677697efd8d91f431aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_226c16833d3da7128f340ab3d41f3dfb6db1563a0f3f8677697efd8d91f431aa->enter($__internal_226c16833d3da7128f340ab3d41f3dfb6db1563a0f3f8677697efd8d91f431aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_cb23cb8400da0b74fbec841e1feee45cc6c43b9ec14f1526ef94bf4e97a9a64c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb23cb8400da0b74fbec841e1feee45cc6c43b9ec14f1526ef94bf4e97a9a64c->enter($__internal_cb23cb8400da0b74fbec841e1feee45cc6c43b9ec14f1526ef94bf4e97a9a64c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

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
        
        $__internal_cb23cb8400da0b74fbec841e1feee45cc6c43b9ec14f1526ef94bf4e97a9a64c->leave($__internal_cb23cb8400da0b74fbec841e1feee45cc6c43b9ec14f1526ef94bf4e97a9a64c_prof);

        
        $__internal_226c16833d3da7128f340ab3d41f3dfb6db1563a0f3f8677697efd8d91f431aa->leave($__internal_226c16833d3da7128f340ab3d41f3dfb6db1563a0f3f8677697efd8d91f431aa_prof);

    }

    // line 122
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_a6dfc37771cfacb3e48b5eda79276421db0e08487731f7f0e186a38a87fdae8d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a6dfc37771cfacb3e48b5eda79276421db0e08487731f7f0e186a38a87fdae8d->enter($__internal_a6dfc37771cfacb3e48b5eda79276421db0e08487731f7f0e186a38a87fdae8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_d6dfa3a932fb8fe9bf5d4c07bb8cce43fd8ed725b14e834c2ad8309498fa97d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6dfa3a932fb8fe9bf5d4c07bb8cce43fd8ed725b14e834c2ad8309498fa97d5->enter($__internal_d6dfa3a932fb8fe9bf5d4c07bb8cce43fd8ed725b14e834c2ad8309498fa97d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

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
        
        $__internal_d6dfa3a932fb8fe9bf5d4c07bb8cce43fd8ed725b14e834c2ad8309498fa97d5->leave($__internal_d6dfa3a932fb8fe9bf5d4c07bb8cce43fd8ed725b14e834c2ad8309498fa97d5_prof);

        
        $__internal_a6dfc37771cfacb3e48b5eda79276421db0e08487731f7f0e186a38a87fdae8d->leave($__internal_a6dfc37771cfacb3e48b5eda79276421db0e08487731f7f0e186a38a87fdae8d_prof);

    }

    // line 133
    public function block_dateinterval_widget($context, array $blocks = array())
    {
        $__internal_db3cc96af7fe3fbeb67732c3102a1eb7f94718b5657380517bc7183799c39f44 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db3cc96af7fe3fbeb67732c3102a1eb7f94718b5657380517bc7183799c39f44->enter($__internal_db3cc96af7fe3fbeb67732c3102a1eb7f94718b5657380517bc7183799c39f44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        $__internal_756341e5648e75ebca63f8f7221aa6cb7165deaa80830c197ed81dcea8ac647b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_756341e5648e75ebca63f8f7221aa6cb7165deaa80830c197ed81dcea8ac647b->enter($__internal_756341e5648e75ebca63f8f7221aa6cb7165deaa80830c197ed81dcea8ac647b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

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
        
        $__internal_756341e5648e75ebca63f8f7221aa6cb7165deaa80830c197ed81dcea8ac647b->leave($__internal_756341e5648e75ebca63f8f7221aa6cb7165deaa80830c197ed81dcea8ac647b_prof);

        
        $__internal_db3cc96af7fe3fbeb67732c3102a1eb7f94718b5657380517bc7183799c39f44->leave($__internal_db3cc96af7fe3fbeb67732c3102a1eb7f94718b5657380517bc7183799c39f44_prof);

    }

    // line 168
    public function block_number_widget($context, array $blocks = array())
    {
        $__internal_4d555ff4570ca1a75b7f72be997d51b71eec2008ba8aa8b3a514eb8cda90ef6e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d555ff4570ca1a75b7f72be997d51b71eec2008ba8aa8b3a514eb8cda90ef6e->enter($__internal_4d555ff4570ca1a75b7f72be997d51b71eec2008ba8aa8b3a514eb8cda90ef6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "number_widget"));

        $__internal_31830132aa95234715abe3865d4ccf2267c8710fcd26366595f524b1eae7cbf2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_31830132aa95234715abe3865d4ccf2267c8710fcd26366595f524b1eae7cbf2->enter($__internal_31830132aa95234715abe3865d4ccf2267c8710fcd26366595f524b1eae7cbf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "number_widget"));

        // line 170
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 170, $this->getSourceContext()); })()), "text")) : ("text"));
        // line 171
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_31830132aa95234715abe3865d4ccf2267c8710fcd26366595f524b1eae7cbf2->leave($__internal_31830132aa95234715abe3865d4ccf2267c8710fcd26366595f524b1eae7cbf2_prof);

        
        $__internal_4d555ff4570ca1a75b7f72be997d51b71eec2008ba8aa8b3a514eb8cda90ef6e->leave($__internal_4d555ff4570ca1a75b7f72be997d51b71eec2008ba8aa8b3a514eb8cda90ef6e_prof);

    }

    // line 174
    public function block_integer_widget($context, array $blocks = array())
    {
        $__internal_8dbde983b0cfd988b3e54ee3011720a8a3dc75eef172a1e4b8d263c7b1c57ccf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8dbde983b0cfd988b3e54ee3011720a8a3dc75eef172a1e4b8d263c7b1c57ccf->enter($__internal_8dbde983b0cfd988b3e54ee3011720a8a3dc75eef172a1e4b8d263c7b1c57ccf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "integer_widget"));

        $__internal_6c6b1208a52765986f18f53ad38464f7d23c3d455d0697ed81118a03dc97a68a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c6b1208a52765986f18f53ad38464f7d23c3d455d0697ed81118a03dc97a68a->enter($__internal_6c6b1208a52765986f18f53ad38464f7d23c3d455d0697ed81118a03dc97a68a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "integer_widget"));

        // line 175
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 175, $this->getSourceContext()); })()), "number")) : ("number"));
        // line 176
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_6c6b1208a52765986f18f53ad38464f7d23c3d455d0697ed81118a03dc97a68a->leave($__internal_6c6b1208a52765986f18f53ad38464f7d23c3d455d0697ed81118a03dc97a68a_prof);

        
        $__internal_8dbde983b0cfd988b3e54ee3011720a8a3dc75eef172a1e4b8d263c7b1c57ccf->leave($__internal_8dbde983b0cfd988b3e54ee3011720a8a3dc75eef172a1e4b8d263c7b1c57ccf_prof);

    }

    // line 179
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_77cd1b7d262a69265a0fb30a296fffc61d6437ab9a62251eddee969b81768e35 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_77cd1b7d262a69265a0fb30a296fffc61d6437ab9a62251eddee969b81768e35->enter($__internal_77cd1b7d262a69265a0fb30a296fffc61d6437ab9a62251eddee969b81768e35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_e49127ad2c541a2c7c7d86acf7072ce42c4a29f3d976811017332235a1160bc1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e49127ad2c541a2c7c7d86acf7072ce42c4a29f3d976811017332235a1160bc1->enter($__internal_e49127ad2c541a2c7c7d86acf7072ce42c4a29f3d976811017332235a1160bc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 180
        echo twig_replace_filter((isset($context["money_pattern"]) || array_key_exists("money_pattern", $context) ? $context["money_pattern"] : (function () { throw new Twig_Error_Runtime('Variable "money_pattern" does not exist.', 180, $this->getSourceContext()); })()), array("{{ widget }}" =>         $this->renderBlock("form_widget_simple", $context, $blocks)));
        
        $__internal_e49127ad2c541a2c7c7d86acf7072ce42c4a29f3d976811017332235a1160bc1->leave($__internal_e49127ad2c541a2c7c7d86acf7072ce42c4a29f3d976811017332235a1160bc1_prof);

        
        $__internal_77cd1b7d262a69265a0fb30a296fffc61d6437ab9a62251eddee969b81768e35->leave($__internal_77cd1b7d262a69265a0fb30a296fffc61d6437ab9a62251eddee969b81768e35_prof);

    }

    // line 183
    public function block_url_widget($context, array $blocks = array())
    {
        $__internal_c197d7b737cb10699b6d8f14762b370aead7cc6fe32f80eb1fc0f983a306153f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c197d7b737cb10699b6d8f14762b370aead7cc6fe32f80eb1fc0f983a306153f->enter($__internal_c197d7b737cb10699b6d8f14762b370aead7cc6fe32f80eb1fc0f983a306153f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "url_widget"));

        $__internal_f46ea9d38c52a302370954077dca5d15d46cdd4b6f2145fc876d8135b05df24f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f46ea9d38c52a302370954077dca5d15d46cdd4b6f2145fc876d8135b05df24f->enter($__internal_f46ea9d38c52a302370954077dca5d15d46cdd4b6f2145fc876d8135b05df24f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "url_widget"));

        // line 184
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 184, $this->getSourceContext()); })()), "url")) : ("url"));
        // line 185
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_f46ea9d38c52a302370954077dca5d15d46cdd4b6f2145fc876d8135b05df24f->leave($__internal_f46ea9d38c52a302370954077dca5d15d46cdd4b6f2145fc876d8135b05df24f_prof);

        
        $__internal_c197d7b737cb10699b6d8f14762b370aead7cc6fe32f80eb1fc0f983a306153f->leave($__internal_c197d7b737cb10699b6d8f14762b370aead7cc6fe32f80eb1fc0f983a306153f_prof);

    }

    // line 188
    public function block_search_widget($context, array $blocks = array())
    {
        $__internal_eea8606fa510c511406b968ae5b174fce8cdd8be0f22f1431212dccb084a21a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eea8606fa510c511406b968ae5b174fce8cdd8be0f22f1431212dccb084a21a9->enter($__internal_eea8606fa510c511406b968ae5b174fce8cdd8be0f22f1431212dccb084a21a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "search_widget"));

        $__internal_ca15afcbec15e9e4ec806d4653fa4efd92cb977f407a97c039640ee844394007 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca15afcbec15e9e4ec806d4653fa4efd92cb977f407a97c039640ee844394007->enter($__internal_ca15afcbec15e9e4ec806d4653fa4efd92cb977f407a97c039640ee844394007_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "search_widget"));

        // line 189
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 189, $this->getSourceContext()); })()), "search")) : ("search"));
        // line 190
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_ca15afcbec15e9e4ec806d4653fa4efd92cb977f407a97c039640ee844394007->leave($__internal_ca15afcbec15e9e4ec806d4653fa4efd92cb977f407a97c039640ee844394007_prof);

        
        $__internal_eea8606fa510c511406b968ae5b174fce8cdd8be0f22f1431212dccb084a21a9->leave($__internal_eea8606fa510c511406b968ae5b174fce8cdd8be0f22f1431212dccb084a21a9_prof);

    }

    // line 193
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_0ef65c12cb829cfcf649bed15568d63ca83b617b457993744bd7b88280400eb6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ef65c12cb829cfcf649bed15568d63ca83b617b457993744bd7b88280400eb6->enter($__internal_0ef65c12cb829cfcf649bed15568d63ca83b617b457993744bd7b88280400eb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_5df076e8196bf3c41d9db1f7e9b0e7647ebd3850a36b8499f7a944625c3ddad4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5df076e8196bf3c41d9db1f7e9b0e7647ebd3850a36b8499f7a944625c3ddad4->enter($__internal_5df076e8196bf3c41d9db1f7e9b0e7647ebd3850a36b8499f7a944625c3ddad4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 194
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 194, $this->getSourceContext()); })()), "text")) : ("text"));
        // line 195
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo " %";
        
        $__internal_5df076e8196bf3c41d9db1f7e9b0e7647ebd3850a36b8499f7a944625c3ddad4->leave($__internal_5df076e8196bf3c41d9db1f7e9b0e7647ebd3850a36b8499f7a944625c3ddad4_prof);

        
        $__internal_0ef65c12cb829cfcf649bed15568d63ca83b617b457993744bd7b88280400eb6->leave($__internal_0ef65c12cb829cfcf649bed15568d63ca83b617b457993744bd7b88280400eb6_prof);

    }

    // line 198
    public function block_password_widget($context, array $blocks = array())
    {
        $__internal_4c7774b4ac34dd91c4e42aef9385d53d87c158eb836b4dbeb274181b019d4c08 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c7774b4ac34dd91c4e42aef9385d53d87c158eb836b4dbeb274181b019d4c08->enter($__internal_4c7774b4ac34dd91c4e42aef9385d53d87c158eb836b4dbeb274181b019d4c08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "password_widget"));

        $__internal_9cec63b4628c7da9969fce0b84f8c70bf99381ccb03570855dccc9ed73323cd6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9cec63b4628c7da9969fce0b84f8c70bf99381ccb03570855dccc9ed73323cd6->enter($__internal_9cec63b4628c7da9969fce0b84f8c70bf99381ccb03570855dccc9ed73323cd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "password_widget"));

        // line 199
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 199, $this->getSourceContext()); })()), "password")) : ("password"));
        // line 200
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_9cec63b4628c7da9969fce0b84f8c70bf99381ccb03570855dccc9ed73323cd6->leave($__internal_9cec63b4628c7da9969fce0b84f8c70bf99381ccb03570855dccc9ed73323cd6_prof);

        
        $__internal_4c7774b4ac34dd91c4e42aef9385d53d87c158eb836b4dbeb274181b019d4c08->leave($__internal_4c7774b4ac34dd91c4e42aef9385d53d87c158eb836b4dbeb274181b019d4c08_prof);

    }

    // line 203
    public function block_hidden_widget($context, array $blocks = array())
    {
        $__internal_6377aa177144333bd81a56841ba19f285520ec8e78012b2689ecdf94bc38821f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6377aa177144333bd81a56841ba19f285520ec8e78012b2689ecdf94bc38821f->enter($__internal_6377aa177144333bd81a56841ba19f285520ec8e78012b2689ecdf94bc38821f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_widget"));

        $__internal_0b8d99f3c35917df2a0715963788494be1672038cf4ae6fc5e87ae3f09621ff5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b8d99f3c35917df2a0715963788494be1672038cf4ae6fc5e87ae3f09621ff5->enter($__internal_0b8d99f3c35917df2a0715963788494be1672038cf4ae6fc5e87ae3f09621ff5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_widget"));

        // line 204
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 204, $this->getSourceContext()); })()), "hidden")) : ("hidden"));
        // line 205
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_0b8d99f3c35917df2a0715963788494be1672038cf4ae6fc5e87ae3f09621ff5->leave($__internal_0b8d99f3c35917df2a0715963788494be1672038cf4ae6fc5e87ae3f09621ff5_prof);

        
        $__internal_6377aa177144333bd81a56841ba19f285520ec8e78012b2689ecdf94bc38821f->leave($__internal_6377aa177144333bd81a56841ba19f285520ec8e78012b2689ecdf94bc38821f_prof);

    }

    // line 208
    public function block_email_widget($context, array $blocks = array())
    {
        $__internal_5273f41b7885d339fd834cd4e49da31b4382f2b4592ba304788284b6e50b64c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5273f41b7885d339fd834cd4e49da31b4382f2b4592ba304788284b6e50b64c2->enter($__internal_5273f41b7885d339fd834cd4e49da31b4382f2b4592ba304788284b6e50b64c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "email_widget"));

        $__internal_36c83e1b7c9e6c0897f9f5cbed7144b9103df6cba03190a75f529f91d90a389d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36c83e1b7c9e6c0897f9f5cbed7144b9103df6cba03190a75f529f91d90a389d->enter($__internal_36c83e1b7c9e6c0897f9f5cbed7144b9103df6cba03190a75f529f91d90a389d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "email_widget"));

        // line 209
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 209, $this->getSourceContext()); })()), "email")) : ("email"));
        // line 210
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_36c83e1b7c9e6c0897f9f5cbed7144b9103df6cba03190a75f529f91d90a389d->leave($__internal_36c83e1b7c9e6c0897f9f5cbed7144b9103df6cba03190a75f529f91d90a389d_prof);

        
        $__internal_5273f41b7885d339fd834cd4e49da31b4382f2b4592ba304788284b6e50b64c2->leave($__internal_5273f41b7885d339fd834cd4e49da31b4382f2b4592ba304788284b6e50b64c2_prof);

    }

    // line 213
    public function block_range_widget($context, array $blocks = array())
    {
        $__internal_fa12b8aecd87dba712b735b1549b5175df628ca94416a0b6066185bd33a13338 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa12b8aecd87dba712b735b1549b5175df628ca94416a0b6066185bd33a13338->enter($__internal_fa12b8aecd87dba712b735b1549b5175df628ca94416a0b6066185bd33a13338_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "range_widget"));

        $__internal_933427c6daba17b0984bb9677fdaf62d7c52982f7d3b62d8b25957b1c500f847 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_933427c6daba17b0984bb9677fdaf62d7c52982f7d3b62d8b25957b1c500f847->enter($__internal_933427c6daba17b0984bb9677fdaf62d7c52982f7d3b62d8b25957b1c500f847_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "range_widget"));

        // line 214
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 214, $this->getSourceContext()); })()), "range")) : ("range"));
        // line 215
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_933427c6daba17b0984bb9677fdaf62d7c52982f7d3b62d8b25957b1c500f847->leave($__internal_933427c6daba17b0984bb9677fdaf62d7c52982f7d3b62d8b25957b1c500f847_prof);

        
        $__internal_fa12b8aecd87dba712b735b1549b5175df628ca94416a0b6066185bd33a13338->leave($__internal_fa12b8aecd87dba712b735b1549b5175df628ca94416a0b6066185bd33a13338_prof);

    }

    // line 218
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_9b4bb1992ad4d27165204361192f7b40fdf4c3dcb092f6614e31c3ff9ddfbcfd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b4bb1992ad4d27165204361192f7b40fdf4c3dcb092f6614e31c3ff9ddfbcfd->enter($__internal_9b4bb1992ad4d27165204361192f7b40fdf4c3dcb092f6614e31c3ff9ddfbcfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_c86ce29160ac5b624d362f185a33afd20f2488013f7f168c1a40098f67c6a006 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c86ce29160ac5b624d362f185a33afd20f2488013f7f168c1a40098f67c6a006->enter($__internal_c86ce29160ac5b624d362f185a33afd20f2488013f7f168c1a40098f67c6a006_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

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
        
        $__internal_c86ce29160ac5b624d362f185a33afd20f2488013f7f168c1a40098f67c6a006->leave($__internal_c86ce29160ac5b624d362f185a33afd20f2488013f7f168c1a40098f67c6a006_prof);

        
        $__internal_9b4bb1992ad4d27165204361192f7b40fdf4c3dcb092f6614e31c3ff9ddfbcfd->leave($__internal_9b4bb1992ad4d27165204361192f7b40fdf4c3dcb092f6614e31c3ff9ddfbcfd_prof);

    }

    // line 232
    public function block_submit_widget($context, array $blocks = array())
    {
        $__internal_c109f8dc3f5cee32003ad402dc6bd098450bb51a296ef0c609d56d8ad1c6aaf7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c109f8dc3f5cee32003ad402dc6bd098450bb51a296ef0c609d56d8ad1c6aaf7->enter($__internal_c109f8dc3f5cee32003ad402dc6bd098450bb51a296ef0c609d56d8ad1c6aaf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_widget"));

        $__internal_519c24da6d037cea244657eb2f6076b79737def0c5247088ed65525b24ba2991 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_519c24da6d037cea244657eb2f6076b79737def0c5247088ed65525b24ba2991->enter($__internal_519c24da6d037cea244657eb2f6076b79737def0c5247088ed65525b24ba2991_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_widget"));

        // line 233
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 233, $this->getSourceContext()); })()), "submit")) : ("submit"));
        // line 234
        $this->displayBlock("button_widget", $context, $blocks);
        
        $__internal_519c24da6d037cea244657eb2f6076b79737def0c5247088ed65525b24ba2991->leave($__internal_519c24da6d037cea244657eb2f6076b79737def0c5247088ed65525b24ba2991_prof);

        
        $__internal_c109f8dc3f5cee32003ad402dc6bd098450bb51a296ef0c609d56d8ad1c6aaf7->leave($__internal_c109f8dc3f5cee32003ad402dc6bd098450bb51a296ef0c609d56d8ad1c6aaf7_prof);

    }

    // line 237
    public function block_reset_widget($context, array $blocks = array())
    {
        $__internal_e56c7dad7230df236a34f2a68ca11c99c741ece6027622bfea5872b09e84a9b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e56c7dad7230df236a34f2a68ca11c99c741ece6027622bfea5872b09e84a9b2->enter($__internal_e56c7dad7230df236a34f2a68ca11c99c741ece6027622bfea5872b09e84a9b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_widget"));

        $__internal_f4ac64f0c61382718786a4e1c1e1beca64b3ec056acf939713dbf2863c0180d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4ac64f0c61382718786a4e1c1e1beca64b3ec056acf939713dbf2863c0180d4->enter($__internal_f4ac64f0c61382718786a4e1c1e1beca64b3ec056acf939713dbf2863c0180d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_widget"));

        // line 238
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 238, $this->getSourceContext()); })()), "reset")) : ("reset"));
        // line 239
        $this->displayBlock("button_widget", $context, $blocks);
        
        $__internal_f4ac64f0c61382718786a4e1c1e1beca64b3ec056acf939713dbf2863c0180d4->leave($__internal_f4ac64f0c61382718786a4e1c1e1beca64b3ec056acf939713dbf2863c0180d4_prof);

        
        $__internal_e56c7dad7230df236a34f2a68ca11c99c741ece6027622bfea5872b09e84a9b2->leave($__internal_e56c7dad7230df236a34f2a68ca11c99c741ece6027622bfea5872b09e84a9b2_prof);

    }

    // line 242
    public function block_tel_widget($context, array $blocks = array())
    {
        $__internal_d45f40443e8660f0988359b44b8526cf0b04f45976b39d7462e36f70b5c98adc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d45f40443e8660f0988359b44b8526cf0b04f45976b39d7462e36f70b5c98adc->enter($__internal_d45f40443e8660f0988359b44b8526cf0b04f45976b39d7462e36f70b5c98adc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tel_widget"));

        $__internal_beda015b2c15a135f5923954984e79c17743b9ce0f44845c2535f29542a78885 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_beda015b2c15a135f5923954984e79c17743b9ce0f44845c2535f29542a78885->enter($__internal_beda015b2c15a135f5923954984e79c17743b9ce0f44845c2535f29542a78885_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tel_widget"));

        // line 243
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 243, $this->getSourceContext()); })()), "tel")) : ("tel"));
        // line 244
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_beda015b2c15a135f5923954984e79c17743b9ce0f44845c2535f29542a78885->leave($__internal_beda015b2c15a135f5923954984e79c17743b9ce0f44845c2535f29542a78885_prof);

        
        $__internal_d45f40443e8660f0988359b44b8526cf0b04f45976b39d7462e36f70b5c98adc->leave($__internal_d45f40443e8660f0988359b44b8526cf0b04f45976b39d7462e36f70b5c98adc_prof);

    }

    // line 247
    public function block_color_widget($context, array $blocks = array())
    {
        $__internal_c74778feb209ca49f733d1dd47172f4a516f49b1a2a213b36271eca6a7e13259 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c74778feb209ca49f733d1dd47172f4a516f49b1a2a213b36271eca6a7e13259->enter($__internal_c74778feb209ca49f733d1dd47172f4a516f49b1a2a213b36271eca6a7e13259_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "color_widget"));

        $__internal_a047363a5a7da099ac280e8257578ed5879a4702bac33416791e7b8114bc7371 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a047363a5a7da099ac280e8257578ed5879a4702bac33416791e7b8114bc7371->enter($__internal_a047363a5a7da099ac280e8257578ed5879a4702bac33416791e7b8114bc7371_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "color_widget"));

        // line 248
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 248, $this->getSourceContext()); })()), "color")) : ("color"));
        // line 249
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_a047363a5a7da099ac280e8257578ed5879a4702bac33416791e7b8114bc7371->leave($__internal_a047363a5a7da099ac280e8257578ed5879a4702bac33416791e7b8114bc7371_prof);

        
        $__internal_c74778feb209ca49f733d1dd47172f4a516f49b1a2a213b36271eca6a7e13259->leave($__internal_c74778feb209ca49f733d1dd47172f4a516f49b1a2a213b36271eca6a7e13259_prof);

    }

    // line 254
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_0e2c99fbf70cc4c7c0f26538080d73ca585f4e1c1d9643d242d2967f09c1d4e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e2c99fbf70cc4c7c0f26538080d73ca585f4e1c1d9643d242d2967f09c1d4e8->enter($__internal_0e2c99fbf70cc4c7c0f26538080d73ca585f4e1c1d9643d242d2967f09c1d4e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_58c3cbb3d9e7e5532ef32107c9445181823d2863f2e5954f8d9d5348a5fe4159 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58c3cbb3d9e7e5532ef32107c9445181823d2863f2e5954f8d9d5348a5fe4159->enter($__internal_58c3cbb3d9e7e5532ef32107c9445181823d2863f2e5954f8d9d5348a5fe4159_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

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
                $__internal_157a2b12cc135781c9bdf4f8f6110af4bc804a66db25253d579d56565b161613 = array("attr" => (isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 272, $this->getSourceContext()); })()));
                if (!is_array($__internal_157a2b12cc135781c9bdf4f8f6110af4bc804a66db25253d579d56565b161613)) {
                    throw new Twig_Error_Runtime('Variables passed to the "with" tag must be a hash.');
                }
                $context['_parent'] = $context;
                $context = array_merge($context, $__internal_157a2b12cc135781c9bdf4f8f6110af4bc804a66db25253d579d56565b161613);
                $this->displayBlock("attributes", $context, $blocks);
                $context = $context['_parent'];
            }
            echo ">";
            echo twig_escape_filter($this->env, ((((isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 272, $this->getSourceContext()); })()) === false)) ? ((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 272, $this->getSourceContext()); })())) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 272, $this->getSourceContext()); })()), array(), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 272, $this->getSourceContext()); })())))), "html", null, true);
            echo "</";
            echo twig_escape_filter($this->env, ((array_key_exists("element", $context)) ? (_twig_default_filter((isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new Twig_Error_Runtime('Variable "element" does not exist.', 272, $this->getSourceContext()); })()), "label")) : ("label")), "html", null, true);
            echo ">";
        }
        
        $__internal_58c3cbb3d9e7e5532ef32107c9445181823d2863f2e5954f8d9d5348a5fe4159->leave($__internal_58c3cbb3d9e7e5532ef32107c9445181823d2863f2e5954f8d9d5348a5fe4159_prof);

        
        $__internal_0e2c99fbf70cc4c7c0f26538080d73ca585f4e1c1d9643d242d2967f09c1d4e8->leave($__internal_0e2c99fbf70cc4c7c0f26538080d73ca585f4e1c1d9643d242d2967f09c1d4e8_prof);

    }

    // line 276
    public function block_button_label($context, array $blocks = array())
    {
        $__internal_5202857b3101cbb32d2b51414d9e5a5a8203557a0a11f6a8b676fc73f0a7a744 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5202857b3101cbb32d2b51414d9e5a5a8203557a0a11f6a8b676fc73f0a7a744->enter($__internal_5202857b3101cbb32d2b51414d9e5a5a8203557a0a11f6a8b676fc73f0a7a744_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_label"));

        $__internal_c73afb1424c276e15b037263e4bafe1448f85d569c10e5a240572cf44d6f55ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c73afb1424c276e15b037263e4bafe1448f85d569c10e5a240572cf44d6f55ad->enter($__internal_c73afb1424c276e15b037263e4bafe1448f85d569c10e5a240572cf44d6f55ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_label"));

        
        $__internal_c73afb1424c276e15b037263e4bafe1448f85d569c10e5a240572cf44d6f55ad->leave($__internal_c73afb1424c276e15b037263e4bafe1448f85d569c10e5a240572cf44d6f55ad_prof);

        
        $__internal_5202857b3101cbb32d2b51414d9e5a5a8203557a0a11f6a8b676fc73f0a7a744->leave($__internal_5202857b3101cbb32d2b51414d9e5a5a8203557a0a11f6a8b676fc73f0a7a744_prof);

    }

    // line 280
    public function block_repeated_row($context, array $blocks = array())
    {
        $__internal_7e4054952a81ad42fa526367396680ea2da0f8c005da324930bd1578cb268b9a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e4054952a81ad42fa526367396680ea2da0f8c005da324930bd1578cb268b9a->enter($__internal_7e4054952a81ad42fa526367396680ea2da0f8c005da324930bd1578cb268b9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "repeated_row"));

        $__internal_535c4d21758bc36705e7ac9cbeaa97a3c921cbc2131e90749ac35334356c597b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_535c4d21758bc36705e7ac9cbeaa97a3c921cbc2131e90749ac35334356c597b->enter($__internal_535c4d21758bc36705e7ac9cbeaa97a3c921cbc2131e90749ac35334356c597b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "repeated_row"));

        // line 285
        $this->displayBlock("form_rows", $context, $blocks);
        
        $__internal_535c4d21758bc36705e7ac9cbeaa97a3c921cbc2131e90749ac35334356c597b->leave($__internal_535c4d21758bc36705e7ac9cbeaa97a3c921cbc2131e90749ac35334356c597b_prof);

        
        $__internal_7e4054952a81ad42fa526367396680ea2da0f8c005da324930bd1578cb268b9a->leave($__internal_7e4054952a81ad42fa526367396680ea2da0f8c005da324930bd1578cb268b9a_prof);

    }

    // line 288
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_9fad7ade06c6e6bbfb337dc5a7af68f9f92e1090d1df354d9046610bc604a57b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9fad7ade06c6e6bbfb337dc5a7af68f9f92e1090d1df354d9046610bc604a57b->enter($__internal_9fad7ade06c6e6bbfb337dc5a7af68f9f92e1090d1df354d9046610bc604a57b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_10bd7782d86b63baafc5fdd72fa5c7a29bc3a5e122e3c64d7ee972196f31649b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10bd7782d86b63baafc5fdd72fa5c7a29bc3a5e122e3c64d7ee972196f31649b->enter($__internal_10bd7782d86b63baafc5fdd72fa5c7a29bc3a5e122e3c64d7ee972196f31649b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_10bd7782d86b63baafc5fdd72fa5c7a29bc3a5e122e3c64d7ee972196f31649b->leave($__internal_10bd7782d86b63baafc5fdd72fa5c7a29bc3a5e122e3c64d7ee972196f31649b_prof);

        
        $__internal_9fad7ade06c6e6bbfb337dc5a7af68f9f92e1090d1df354d9046610bc604a57b->leave($__internal_9fad7ade06c6e6bbfb337dc5a7af68f9f92e1090d1df354d9046610bc604a57b_prof);

    }

    // line 296
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_3a61852c9f1319c2d2e119332fb2641c7ec5703a635d288e3084db1400ee3afd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a61852c9f1319c2d2e119332fb2641c7ec5703a635d288e3084db1400ee3afd->enter($__internal_3a61852c9f1319c2d2e119332fb2641c7ec5703a635d288e3084db1400ee3afd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_15f2f254834a892969865f9f9d783c29873e20f5628d7628758b4b388cb73cc3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15f2f254834a892969865f9f9d783c29873e20f5628d7628758b4b388cb73cc3->enter($__internal_15f2f254834a892969865f9f9d783c29873e20f5628d7628758b4b388cb73cc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 297
        echo "<div>";
        // line 298
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 298, $this->getSourceContext()); })()), 'widget');
        // line 299
        echo "</div>";
        
        $__internal_15f2f254834a892969865f9f9d783c29873e20f5628d7628758b4b388cb73cc3->leave($__internal_15f2f254834a892969865f9f9d783c29873e20f5628d7628758b4b388cb73cc3_prof);

        
        $__internal_3a61852c9f1319c2d2e119332fb2641c7ec5703a635d288e3084db1400ee3afd->leave($__internal_3a61852c9f1319c2d2e119332fb2641c7ec5703a635d288e3084db1400ee3afd_prof);

    }

    // line 302
    public function block_hidden_row($context, array $blocks = array())
    {
        $__internal_7f57f799f9b6d9eacdfa00fa6d3724395d95a29f6e2c3fe9dba41c1178a09dc2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f57f799f9b6d9eacdfa00fa6d3724395d95a29f6e2c3fe9dba41c1178a09dc2->enter($__internal_7f57f799f9b6d9eacdfa00fa6d3724395d95a29f6e2c3fe9dba41c1178a09dc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        $__internal_6701c7de2023f0d39a563aee4f90fa3f541d733111d9af0cd0630e8546786e31 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6701c7de2023f0d39a563aee4f90fa3f541d733111d9af0cd0630e8546786e31->enter($__internal_6701c7de2023f0d39a563aee4f90fa3f541d733111d9af0cd0630e8546786e31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        // line 303
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 303, $this->getSourceContext()); })()), 'widget');
        
        $__internal_6701c7de2023f0d39a563aee4f90fa3f541d733111d9af0cd0630e8546786e31->leave($__internal_6701c7de2023f0d39a563aee4f90fa3f541d733111d9af0cd0630e8546786e31_prof);

        
        $__internal_7f57f799f9b6d9eacdfa00fa6d3724395d95a29f6e2c3fe9dba41c1178a09dc2->leave($__internal_7f57f799f9b6d9eacdfa00fa6d3724395d95a29f6e2c3fe9dba41c1178a09dc2_prof);

    }

    // line 308
    public function block_form($context, array $blocks = array())
    {
        $__internal_b52324181be853e66854ac1c1673ef41819f107d270160491eb4e2875b838ee6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b52324181be853e66854ac1c1673ef41819f107d270160491eb4e2875b838ee6->enter($__internal_b52324181be853e66854ac1c1673ef41819f107d270160491eb4e2875b838ee6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        $__internal_bdc05e8544dc39e8839caa0e2a202e3abc68f9b88aacd63b6a9bfb5e27fe6bbf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bdc05e8544dc39e8839caa0e2a202e3abc68f9b88aacd63b6a9bfb5e27fe6bbf->enter($__internal_bdc05e8544dc39e8839caa0e2a202e3abc68f9b88aacd63b6a9bfb5e27fe6bbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 309
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 309, $this->getSourceContext()); })()), 'form_start');
        // line 310
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 310, $this->getSourceContext()); })()), 'widget');
        // line 311
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 311, $this->getSourceContext()); })()), 'form_end');
        
        $__internal_bdc05e8544dc39e8839caa0e2a202e3abc68f9b88aacd63b6a9bfb5e27fe6bbf->leave($__internal_bdc05e8544dc39e8839caa0e2a202e3abc68f9b88aacd63b6a9bfb5e27fe6bbf_prof);

        
        $__internal_b52324181be853e66854ac1c1673ef41819f107d270160491eb4e2875b838ee6->leave($__internal_b52324181be853e66854ac1c1673ef41819f107d270160491eb4e2875b838ee6_prof);

    }

    // line 314
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_44ac63ba4908b0be9a6f84c11625ca4cfd9185214771df3b3ca5d29da723f7d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_44ac63ba4908b0be9a6f84c11625ca4cfd9185214771df3b3ca5d29da723f7d5->enter($__internal_44ac63ba4908b0be9a6f84c11625ca4cfd9185214771df3b3ca5d29da723f7d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        $__internal_1b34d7f39688f4856ce9679d87b9199c68fa8ad8a8be96829782ce85ca219278 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b34d7f39688f4856ce9679d87b9199c68fa8ad8a8be96829782ce85ca219278->enter($__internal_1b34d7f39688f4856ce9679d87b9199c68fa8ad8a8be96829782ce85ca219278_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

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
        
        $__internal_1b34d7f39688f4856ce9679d87b9199c68fa8ad8a8be96829782ce85ca219278->leave($__internal_1b34d7f39688f4856ce9679d87b9199c68fa8ad8a8be96829782ce85ca219278_prof);

        
        $__internal_44ac63ba4908b0be9a6f84c11625ca4cfd9185214771df3b3ca5d29da723f7d5->leave($__internal_44ac63ba4908b0be9a6f84c11625ca4cfd9185214771df3b3ca5d29da723f7d5_prof);

    }

    // line 328
    public function block_form_end($context, array $blocks = array())
    {
        $__internal_00d3f729157aaac387b3c6a8671565fa2bd5c15b87d61cd91ace5378e6096a15 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_00d3f729157aaac387b3c6a8671565fa2bd5c15b87d61cd91ace5378e6096a15->enter($__internal_00d3f729157aaac387b3c6a8671565fa2bd5c15b87d61cd91ace5378e6096a15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_end"));

        $__internal_ad9d44dc9aafaffc42359bf1d1a1c8ea814d2f63b94a0d6b960e470a0f055fb4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad9d44dc9aafaffc42359bf1d1a1c8ea814d2f63b94a0d6b960e470a0f055fb4->enter($__internal_ad9d44dc9aafaffc42359bf1d1a1c8ea814d2f63b94a0d6b960e470a0f055fb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_end"));

        // line 329
        if (( !array_key_exists("render_rest", $context) || (isset($context["render_rest"]) || array_key_exists("render_rest", $context) ? $context["render_rest"] : (function () { throw new Twig_Error_Runtime('Variable "render_rest" does not exist.', 329, $this->getSourceContext()); })()))) {
            // line 330
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 330, $this->getSourceContext()); })()), 'rest');
        }
        // line 332
        echo "</form>";
        
        $__internal_ad9d44dc9aafaffc42359bf1d1a1c8ea814d2f63b94a0d6b960e470a0f055fb4->leave($__internal_ad9d44dc9aafaffc42359bf1d1a1c8ea814d2f63b94a0d6b960e470a0f055fb4_prof);

        
        $__internal_00d3f729157aaac387b3c6a8671565fa2bd5c15b87d61cd91ace5378e6096a15->leave($__internal_00d3f729157aaac387b3c6a8671565fa2bd5c15b87d61cd91ace5378e6096a15_prof);

    }

    // line 335
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_5d89186c816e11e691a6448b81d4e4ca82758f9952a1f82d4c1418841f834727 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d89186c816e11e691a6448b81d4e4ca82758f9952a1f82d4c1418841f834727->enter($__internal_5d89186c816e11e691a6448b81d4e4ca82758f9952a1f82d4c1418841f834727_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_4da76ab28c1235ec8c9291fefcf18f0956dec4da0d3dc2e52beeedb0a4132dca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4da76ab28c1235ec8c9291fefcf18f0956dec4da0d3dc2e52beeedb0a4132dca->enter($__internal_4da76ab28c1235ec8c9291fefcf18f0956dec4da0d3dc2e52beeedb0a4132dca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

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
        
        $__internal_4da76ab28c1235ec8c9291fefcf18f0956dec4da0d3dc2e52beeedb0a4132dca->leave($__internal_4da76ab28c1235ec8c9291fefcf18f0956dec4da0d3dc2e52beeedb0a4132dca_prof);

        
        $__internal_5d89186c816e11e691a6448b81d4e4ca82758f9952a1f82d4c1418841f834727->leave($__internal_5d89186c816e11e691a6448b81d4e4ca82758f9952a1f82d4c1418841f834727_prof);

    }

    // line 345
    public function block_form_rest($context, array $blocks = array())
    {
        $__internal_5fe10c66c7f85c16668d2cf01711568270d2b4118ead69c1978842997dc2d800 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5fe10c66c7f85c16668d2cf01711568270d2b4118ead69c1978842997dc2d800->enter($__internal_5fe10c66c7f85c16668d2cf01711568270d2b4118ead69c1978842997dc2d800_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_rest"));

        $__internal_58f894f31df78651b48365f957cfe1ec58698108dae82e7bb6812bac502fbf36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58f894f31df78651b48365f957cfe1ec58698108dae82e7bb6812bac502fbf36->enter($__internal_58f894f31df78651b48365f957cfe1ec58698108dae82e7bb6812bac502fbf36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_rest"));

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
        
        $__internal_58f894f31df78651b48365f957cfe1ec58698108dae82e7bb6812bac502fbf36->leave($__internal_58f894f31df78651b48365f957cfe1ec58698108dae82e7bb6812bac502fbf36_prof);

        
        $__internal_5fe10c66c7f85c16668d2cf01711568270d2b4118ead69c1978842997dc2d800->leave($__internal_5fe10c66c7f85c16668d2cf01711568270d2b4118ead69c1978842997dc2d800_prof);

    }

    // line 369
    public function block_form_rows($context, array $blocks = array())
    {
        $__internal_64b775276a9cdbd707ad0b3440781a90542e0a2d38970f4f97d638f3852edd5a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_64b775276a9cdbd707ad0b3440781a90542e0a2d38970f4f97d638f3852edd5a->enter($__internal_64b775276a9cdbd707ad0b3440781a90542e0a2d38970f4f97d638f3852edd5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_rows"));

        $__internal_5944d837acb2f943f64c760c92f26afcb59253a2df1d8fce23adaae93a7d2031 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5944d837acb2f943f64c760c92f26afcb59253a2df1d8fce23adaae93a7d2031->enter($__internal_5944d837acb2f943f64c760c92f26afcb59253a2df1d8fce23adaae93a7d2031_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_rows"));

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
        
        $__internal_5944d837acb2f943f64c760c92f26afcb59253a2df1d8fce23adaae93a7d2031->leave($__internal_5944d837acb2f943f64c760c92f26afcb59253a2df1d8fce23adaae93a7d2031_prof);

        
        $__internal_64b775276a9cdbd707ad0b3440781a90542e0a2d38970f4f97d638f3852edd5a->leave($__internal_64b775276a9cdbd707ad0b3440781a90542e0a2d38970f4f97d638f3852edd5a_prof);

    }

    // line 375
    public function block_widget_attributes($context, array $blocks = array())
    {
        $__internal_599b47355ca26c2125c6c241d1d8be13c909905baa05f62332d863a302ea5ec1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_599b47355ca26c2125c6c241d1d8be13c909905baa05f62332d863a302ea5ec1->enter($__internal_599b47355ca26c2125c6c241d1d8be13c909905baa05f62332d863a302ea5ec1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widget_attributes"));

        $__internal_4755594f397894d784ba6d3c4455bb6b30964822d7f8db034c5e921b926b5d10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4755594f397894d784ba6d3c4455bb6b30964822d7f8db034c5e921b926b5d10->enter($__internal_4755594f397894d784ba6d3c4455bb6b30964822d7f8db034c5e921b926b5d10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widget_attributes"));

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
        
        $__internal_4755594f397894d784ba6d3c4455bb6b30964822d7f8db034c5e921b926b5d10->leave($__internal_4755594f397894d784ba6d3c4455bb6b30964822d7f8db034c5e921b926b5d10_prof);

        
        $__internal_599b47355ca26c2125c6c241d1d8be13c909905baa05f62332d863a302ea5ec1->leave($__internal_599b47355ca26c2125c6c241d1d8be13c909905baa05f62332d863a302ea5ec1_prof);

    }

    // line 382
    public function block_widget_container_attributes($context, array $blocks = array())
    {
        $__internal_f1f28f28d8723c21761b85dd8fb67736acca3e8b8fd9b1f0fe26d526beb01737 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f1f28f28d8723c21761b85dd8fb67736acca3e8b8fd9b1f0fe26d526beb01737->enter($__internal_f1f28f28d8723c21761b85dd8fb67736acca3e8b8fd9b1f0fe26d526beb01737_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widget_container_attributes"));

        $__internal_7395070b561685e04244d34cca2b8694b7fb86c3b267c93f992320e60dabd55a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7395070b561685e04244d34cca2b8694b7fb86c3b267c93f992320e60dabd55a->enter($__internal_7395070b561685e04244d34cca2b8694b7fb86c3b267c93f992320e60dabd55a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widget_container_attributes"));

        // line 383
        if ( !twig_test_empty((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 383, $this->getSourceContext()); })()))) {
            echo "id=\"";
            echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 383, $this->getSourceContext()); })()), "html", null, true);
            echo "\"";
        }
        // line 384
        $this->displayBlock("attributes", $context, $blocks);
        
        $__internal_7395070b561685e04244d34cca2b8694b7fb86c3b267c93f992320e60dabd55a->leave($__internal_7395070b561685e04244d34cca2b8694b7fb86c3b267c93f992320e60dabd55a_prof);

        
        $__internal_f1f28f28d8723c21761b85dd8fb67736acca3e8b8fd9b1f0fe26d526beb01737->leave($__internal_f1f28f28d8723c21761b85dd8fb67736acca3e8b8fd9b1f0fe26d526beb01737_prof);

    }

    // line 387
    public function block_button_attributes($context, array $blocks = array())
    {
        $__internal_236ae29ff144becc62b1064540d32f5703bad9ccb372c5fb23298997f81c5966 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_236ae29ff144becc62b1064540d32f5703bad9ccb372c5fb23298997f81c5966->enter($__internal_236ae29ff144becc62b1064540d32f5703bad9ccb372c5fb23298997f81c5966_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_attributes"));

        $__internal_01dfea43ee5d54c7ee7a21a577a99ee720e9b1ce26dbd6e64c404f8de488ce5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01dfea43ee5d54c7ee7a21a577a99ee720e9b1ce26dbd6e64c404f8de488ce5d->enter($__internal_01dfea43ee5d54c7ee7a21a577a99ee720e9b1ce26dbd6e64c404f8de488ce5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_attributes"));

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
        
        $__internal_01dfea43ee5d54c7ee7a21a577a99ee720e9b1ce26dbd6e64c404f8de488ce5d->leave($__internal_01dfea43ee5d54c7ee7a21a577a99ee720e9b1ce26dbd6e64c404f8de488ce5d_prof);

        
        $__internal_236ae29ff144becc62b1064540d32f5703bad9ccb372c5fb23298997f81c5966->leave($__internal_236ae29ff144becc62b1064540d32f5703bad9ccb372c5fb23298997f81c5966_prof);

    }

    // line 392
    public function block_attributes($context, array $blocks = array())
    {
        $__internal_0e9aab7c37d9de541db7bf8659ba6db247b60d740d649df439b1d3ebf218820a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e9aab7c37d9de541db7bf8659ba6db247b60d740d649df439b1d3ebf218820a->enter($__internal_0e9aab7c37d9de541db7bf8659ba6db247b60d740d649df439b1d3ebf218820a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "attributes"));

        $__internal_21374227a132d15160e0e27589a948fb2cac6e5f66eca24925c7e8190228058f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21374227a132d15160e0e27589a948fb2cac6e5f66eca24925c7e8190228058f->enter($__internal_21374227a132d15160e0e27589a948fb2cac6e5f66eca24925c7e8190228058f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "attributes"));

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
        
        $__internal_21374227a132d15160e0e27589a948fb2cac6e5f66eca24925c7e8190228058f->leave($__internal_21374227a132d15160e0e27589a948fb2cac6e5f66eca24925c7e8190228058f_prof);

        
        $__internal_0e9aab7c37d9de541db7bf8659ba6db247b60d740d649df439b1d3ebf218820a->leave($__internal_0e9aab7c37d9de541db7bf8659ba6db247b60d740d649df439b1d3ebf218820a_prof);

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
