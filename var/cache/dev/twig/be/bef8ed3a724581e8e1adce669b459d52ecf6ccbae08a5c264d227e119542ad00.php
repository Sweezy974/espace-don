<?php

/* form_div_layout.html.twig */
class __TwigTemplate_7c982cff946cf728bcb6a3020c679ffe2436f63afc2ede7e6312cbe39cc9cc3b extends Twig_Template
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
        $__internal_69f4ef25a229e33696824454db30dfbc8e065a681ff613b6e3f548690593a6dc = $this->env->getExtension("native_profiler");
        $__internal_69f4ef25a229e33696824454db30dfbc8e065a681ff613b6e3f548690593a6dc->enter($__internal_69f4ef25a229e33696824454db30dfbc8e065a681ff613b6e3f548690593a6dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_div_layout.html.twig"));

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
        // line 88
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 92
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 96
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 109
        $this->displayBlock('date_widget', $context, $blocks);
        // line 123
        $this->displayBlock('time_widget', $context, $blocks);
        // line 134
        $this->displayBlock('number_widget', $context, $blocks);
        // line 140
        $this->displayBlock('integer_widget', $context, $blocks);
        // line 145
        $this->displayBlock('money_widget', $context, $blocks);
        // line 149
        $this->displayBlock('url_widget', $context, $blocks);
        // line 154
        $this->displayBlock('search_widget', $context, $blocks);
        // line 159
        $this->displayBlock('percent_widget', $context, $blocks);
        // line 164
        $this->displayBlock('password_widget', $context, $blocks);
        // line 169
        $this->displayBlock('hidden_widget', $context, $blocks);
        // line 174
        $this->displayBlock('email_widget', $context, $blocks);
        // line 179
        $this->displayBlock('range_widget', $context, $blocks);
        // line 184
        $this->displayBlock('button_widget', $context, $blocks);
        // line 198
        $this->displayBlock('submit_widget', $context, $blocks);
        // line 203
        $this->displayBlock('reset_widget', $context, $blocks);
        // line 210
        $this->displayBlock('form_label', $context, $blocks);
        // line 232
        $this->displayBlock('button_label', $context, $blocks);
        // line 236
        $this->displayBlock('repeated_row', $context, $blocks);
        // line 244
        $this->displayBlock('form_row', $context, $blocks);
        // line 252
        $this->displayBlock('button_row', $context, $blocks);
        // line 258
        $this->displayBlock('hidden_row', $context, $blocks);
        // line 264
        $this->displayBlock('form', $context, $blocks);
        // line 270
        $this->displayBlock('form_start', $context, $blocks);
        // line 283
        $this->displayBlock('form_end', $context, $blocks);
        // line 290
        $this->displayBlock('form_errors', $context, $blocks);
        // line 300
        $this->displayBlock('form_rest', $context, $blocks);
        // line 307
        echo "
";
        // line 310
        $this->displayBlock('form_rows', $context, $blocks);
        // line 316
        $this->displayBlock('widget_attributes', $context, $blocks);
        // line 332
        $this->displayBlock('widget_container_attributes', $context, $blocks);
        // line 346
        $this->displayBlock('button_attributes', $context, $blocks);
        // line 360
        $this->displayBlock('attributes', $context, $blocks);
        
        $__internal_69f4ef25a229e33696824454db30dfbc8e065a681ff613b6e3f548690593a6dc->leave($__internal_69f4ef25a229e33696824454db30dfbc8e065a681ff613b6e3f548690593a6dc_prof);

    }

    // line 3
    public function block_form_widget($context, array $blocks = array())
    {
        $__internal_91d254bb08eb485da6367c1198fdd61d8ce25f6a9856cb55989316fdfd6612ed = $this->env->getExtension("native_profiler");
        $__internal_91d254bb08eb485da6367c1198fdd61d8ce25f6a9856cb55989316fdfd6612ed->enter($__internal_91d254bb08eb485da6367c1198fdd61d8ce25f6a9856cb55989316fdfd6612ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget"));

        // line 4
        if ((isset($context["compound"]) ? $context["compound"] : $this->getContext($context, "compound"))) {
            // line 5
            $this->displayBlock("form_widget_compound", $context, $blocks);
        } else {
            // line 7
            $this->displayBlock("form_widget_simple", $context, $blocks);
        }
        
        $__internal_91d254bb08eb485da6367c1198fdd61d8ce25f6a9856cb55989316fdfd6612ed->leave($__internal_91d254bb08eb485da6367c1198fdd61d8ce25f6a9856cb55989316fdfd6612ed_prof);

    }

    // line 11
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_c38ff67f851449b949df32669f1d57c472060ec53349c7fbebee9dea0284cd80 = $this->env->getExtension("native_profiler");
        $__internal_c38ff67f851449b949df32669f1d57c472060ec53349c7fbebee9dea0284cd80->enter($__internal_c38ff67f851449b949df32669f1d57c472060ec53349c7fbebee9dea0284cd80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 12
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "text")) : ("text"));
        // line 13
        echo "<input type=\"";
        echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "html", null, true);
        echo "\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo " ";
        if ( !twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            echo "value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "\" ";
        }
        echo "/>";
        
        $__internal_c38ff67f851449b949df32669f1d57c472060ec53349c7fbebee9dea0284cd80->leave($__internal_c38ff67f851449b949df32669f1d57c472060ec53349c7fbebee9dea0284cd80_prof);

    }

    // line 16
    public function block_form_widget_compound($context, array $blocks = array())
    {
        $__internal_6a6187f14dc644d8e83244c28ed4ec8b63e640a5e6fe4508357d9d6bc7d55f8a = $this->env->getExtension("native_profiler");
        $__internal_6a6187f14dc644d8e83244c28ed4ec8b63e640a5e6fe4508357d9d6bc7d55f8a->enter($__internal_6a6187f14dc644d8e83244c28ed4ec8b63e640a5e6fe4508357d9d6bc7d55f8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        // line 17
        echo "<div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">";
        // line 18
        if (twig_test_empty($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent", array()))) {
            // line 19
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        }
        // line 21
        $this->displayBlock("form_rows", $context, $blocks);
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        // line 23
        echo "</div>";
        
        $__internal_6a6187f14dc644d8e83244c28ed4ec8b63e640a5e6fe4508357d9d6bc7d55f8a->leave($__internal_6a6187f14dc644d8e83244c28ed4ec8b63e640a5e6fe4508357d9d6bc7d55f8a_prof);

    }

    // line 26
    public function block_collection_widget($context, array $blocks = array())
    {
        $__internal_e6a71cdc8f4f27eefca9896122ca5288fdec20760484177dfb822f9ae423fdda = $this->env->getExtension("native_profiler");
        $__internal_e6a71cdc8f4f27eefca9896122ca5288fdec20760484177dfb822f9ae423fdda->enter($__internal_e6a71cdc8f4f27eefca9896122ca5288fdec20760484177dfb822f9ae423fdda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "collection_widget"));

        // line 27
        if (array_key_exists("prototype", $context)) {
            // line 28
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("data-prototype" => $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["prototype"]) ? $context["prototype"] : $this->getContext($context, "prototype")), 'row')));
        }
        // line 30
        $this->displayBlock("form_widget", $context, $blocks);
        
        $__internal_e6a71cdc8f4f27eefca9896122ca5288fdec20760484177dfb822f9ae423fdda->leave($__internal_e6a71cdc8f4f27eefca9896122ca5288fdec20760484177dfb822f9ae423fdda_prof);

    }

    // line 33
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_818010662ff8b03704501e372096e26b056fbccef5d81516883180041f50dc97 = $this->env->getExtension("native_profiler");
        $__internal_818010662ff8b03704501e372096e26b056fbccef5d81516883180041f50dc97->enter($__internal_818010662ff8b03704501e372096e26b056fbccef5d81516883180041f50dc97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 34
        echo "<textarea ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo ">";
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
        echo "</textarea>";
        
        $__internal_818010662ff8b03704501e372096e26b056fbccef5d81516883180041f50dc97->leave($__internal_818010662ff8b03704501e372096e26b056fbccef5d81516883180041f50dc97_prof);

    }

    // line 37
    public function block_choice_widget($context, array $blocks = array())
    {
        $__internal_bc074faed296556109e155419c6ce833b817655d32e04045a6add7f14b2a72fd = $this->env->getExtension("native_profiler");
        $__internal_bc074faed296556109e155419c6ce833b817655d32e04045a6add7f14b2a72fd->enter($__internal_bc074faed296556109e155419c6ce833b817655d32e04045a6add7f14b2a72fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget"));

        // line 38
        if ((isset($context["expanded"]) ? $context["expanded"] : $this->getContext($context, "expanded"))) {
            // line 39
            $this->displayBlock("choice_widget_expanded", $context, $blocks);
        } else {
            // line 41
            $this->displayBlock("choice_widget_collapsed", $context, $blocks);
        }
        
        $__internal_bc074faed296556109e155419c6ce833b817655d32e04045a6add7f14b2a72fd->leave($__internal_bc074faed296556109e155419c6ce833b817655d32e04045a6add7f14b2a72fd_prof);

    }

    // line 45
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_8384d6b63daa34fb78377d67728a3bfc3cc604ba5da8ea213d1d0858e021824a = $this->env->getExtension("native_profiler");
        $__internal_8384d6b63daa34fb78377d67728a3bfc3cc604ba5da8ea213d1d0858e021824a->enter($__internal_8384d6b63daa34fb78377d67728a3bfc3cc604ba5da8ea213d1d0858e021824a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 46
        echo "<div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 48
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["child"], 'widget');
            // line 49
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["child"], 'label', array("translation_domain" => (isset($context["choice_translation_domain"]) ? $context["choice_translation_domain"] : $this->getContext($context, "choice_translation_domain"))));
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "</div>";
        
        $__internal_8384d6b63daa34fb78377d67728a3bfc3cc604ba5da8ea213d1d0858e021824a->leave($__internal_8384d6b63daa34fb78377d67728a3bfc3cc604ba5da8ea213d1d0858e021824a_prof);

    }

    // line 54
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_a09d98da83350dea7b5d2024db160a1ae07ac03bfbfbbae6bb6a195333f3ec49 = $this->env->getExtension("native_profiler");
        $__internal_a09d98da83350dea7b5d2024db160a1ae07ac03bfbfbbae6bb6a195333f3ec49->enter($__internal_a09d98da83350dea7b5d2024db160a1ae07ac03bfbfbbae6bb6a195333f3ec49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 55
        if ((((((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required")) && (null === (isset($context["placeholder"]) ? $context["placeholder"] : $this->getContext($context, "placeholder")))) &&  !(isset($context["placeholder_in_choices"]) ? $context["placeholder_in_choices"] : $this->getContext($context, "placeholder_in_choices"))) &&  !(isset($context["multiple"]) ? $context["multiple"] : $this->getContext($context, "multiple"))) && ( !$this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "size", array(), "any", true, true) || ($this->getAttribute((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), "size", array()) <= 1)))) {
            // line 56
            $context["required"] = false;
        }
        // line 58
        echo "<select ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if ((isset($context["multiple"]) ? $context["multiple"] : $this->getContext($context, "multiple"))) {
            echo " multiple=\"multiple\"";
        }
        echo ">";
        // line 59
        if ( !(null === (isset($context["placeholder"]) ? $context["placeholder"] : $this->getContext($context, "placeholder")))) {
            // line 60
            echo "<option value=\"\"";
            if (((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required")) && twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))))) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, ((((isset($context["placeholder"]) ? $context["placeholder"] : $this->getContext($context, "placeholder")) != "")) ? (((((isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")) === false)) ? ((isset($context["placeholder"]) ? $context["placeholder"] : $this->getContext($context, "placeholder"))) : ($this->env->getExtension('translator')->trans((isset($context["placeholder"]) ? $context["placeholder"] : $this->getContext($context, "placeholder")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")))))) : ("")), "html", null, true);
            echo "</option>";
        }
        // line 62
        if ((twig_length_filter($this->env, (isset($context["preferred_choices"]) ? $context["preferred_choices"] : $this->getContext($context, "preferred_choices"))) > 0)) {
            // line 63
            $context["options"] = (isset($context["preferred_choices"]) ? $context["preferred_choices"] : $this->getContext($context, "preferred_choices"));
            // line 64
            $this->displayBlock("choice_widget_options", $context, $blocks);
            // line 65
            if (((twig_length_filter($this->env, (isset($context["choices"]) ? $context["choices"] : $this->getContext($context, "choices"))) > 0) &&  !(null === (isset($context["separator"]) ? $context["separator"] : $this->getContext($context, "separator"))))) {
                // line 66
                echo "<option disabled=\"disabled\">";
                echo twig_escape_filter($this->env, (isset($context["separator"]) ? $context["separator"] : $this->getContext($context, "separator")), "html", null, true);
                echo "</option>";
            }
        }
        // line 69
        $context["options"] = (isset($context["choices"]) ? $context["choices"] : $this->getContext($context, "choices"));
        // line 70
        $this->displayBlock("choice_widget_options", $context, $blocks);
        // line 71
        echo "</select>";
        
        $__internal_a09d98da83350dea7b5d2024db160a1ae07ac03bfbfbbae6bb6a195333f3ec49->leave($__internal_a09d98da83350dea7b5d2024db160a1ae07ac03bfbfbbae6bb6a195333f3ec49_prof);

    }

    // line 74
    public function block_choice_widget_options($context, array $blocks = array())
    {
        $__internal_f0b86343b5da2fe855ecb37f20f808c16eebb319799fcdb650a04d18a2d068f3 = $this->env->getExtension("native_profiler");
        $__internal_f0b86343b5da2fe855ecb37f20f808c16eebb319799fcdb650a04d18a2d068f3->enter($__internal_f0b86343b5da2fe855ecb37f20f808c16eebb319799fcdb650a04d18a2d068f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_options"));

        // line 75
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")));
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
                echo twig_escape_filter($this->env, ((((isset($context["choice_translation_domain"]) ? $context["choice_translation_domain"] : $this->getContext($context, "choice_translation_domain")) === false)) ? ($context["group_label"]) : ($this->env->getExtension('translator')->trans($context["group_label"], array(), (isset($context["choice_translation_domain"]) ? $context["choice_translation_domain"] : $this->getContext($context, "choice_translation_domain"))))), "html", null, true);
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
                $context["attr"] = $this->getAttribute($context["choice"], "attr", array());
                // line 83
                echo "            <option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["choice"], "value", array()), "html", null, true);
                echo "\" ";
                $this->displayBlock("attributes", $context, $blocks);
                if ($this->env->getExtension('form')->isSelectedChoice($context["choice"], (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
                    echo " selected=\"selected\"";
                }
                echo ">";
                echo twig_escape_filter($this->env, ((((isset($context["choice_translation_domain"]) ? $context["choice_translation_domain"] : $this->getContext($context, "choice_translation_domain")) === false)) ? ($this->getAttribute($context["choice"], "label", array())) : ($this->env->getExtension('translator')->trans($this->getAttribute($context["choice"], "label", array()), array(), (isset($context["choice_translation_domain"]) ? $context["choice_translation_domain"] : $this->getContext($context, "choice_translation_domain"))))), "html", null, true);
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
        
        $__internal_f0b86343b5da2fe855ecb37f20f808c16eebb319799fcdb650a04d18a2d068f3->leave($__internal_f0b86343b5da2fe855ecb37f20f808c16eebb319799fcdb650a04d18a2d068f3_prof);

    }

    // line 88
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_8df5a5ceeba793187b256ab4d8ca67d1e10cd26001ad89155c59de7fc8a997eb = $this->env->getExtension("native_profiler");
        $__internal_8df5a5ceeba793187b256ab4d8ca67d1e10cd26001ad89155c59de7fc8a997eb->enter($__internal_8df5a5ceeba793187b256ab4d8ca67d1e10cd26001ad89155c59de7fc8a997eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 89
        echo "<input type=\"checkbox\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (array_key_exists("value", $context)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "\"";
        }
        if ((isset($context["checked"]) ? $context["checked"] : $this->getContext($context, "checked"))) {
            echo " checked=\"checked\"";
        }
        echo " />";
        
        $__internal_8df5a5ceeba793187b256ab4d8ca67d1e10cd26001ad89155c59de7fc8a997eb->leave($__internal_8df5a5ceeba793187b256ab4d8ca67d1e10cd26001ad89155c59de7fc8a997eb_prof);

    }

    // line 92
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_ed8c89c23664d4074dc811d2cbfb5765d5b64bf9fae09b31b4698fcaa8f1d218 = $this->env->getExtension("native_profiler");
        $__internal_ed8c89c23664d4074dc811d2cbfb5765d5b64bf9fae09b31b4698fcaa8f1d218->enter($__internal_ed8c89c23664d4074dc811d2cbfb5765d5b64bf9fae09b31b4698fcaa8f1d218_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 93
        echo "<input type=\"radio\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (array_key_exists("value", $context)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "\"";
        }
        if ((isset($context["checked"]) ? $context["checked"] : $this->getContext($context, "checked"))) {
            echo " checked=\"checked\"";
        }
        echo " />";
        
        $__internal_ed8c89c23664d4074dc811d2cbfb5765d5b64bf9fae09b31b4698fcaa8f1d218->leave($__internal_ed8c89c23664d4074dc811d2cbfb5765d5b64bf9fae09b31b4698fcaa8f1d218_prof);

    }

    // line 96
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_c20fe5e02fdc9f323f0e258d7873503a3656873af90fb3e7122e6aaae401f473 = $this->env->getExtension("native_profiler");
        $__internal_c20fe5e02fdc9f323f0e258d7873503a3656873af90fb3e7122e6aaae401f473->enter($__internal_c20fe5e02fdc9f323f0e258d7873503a3656873af90fb3e7122e6aaae401f473_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 97
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 98
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 100
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 101
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'errors');
            // line 102
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "time", array()), 'errors');
            // line 103
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'widget');
            // line 104
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "time", array()), 'widget');
            // line 105
            echo "</div>";
        }
        
        $__internal_c20fe5e02fdc9f323f0e258d7873503a3656873af90fb3e7122e6aaae401f473->leave($__internal_c20fe5e02fdc9f323f0e258d7873503a3656873af90fb3e7122e6aaae401f473_prof);

    }

    // line 109
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_10ec90de1513c17f768a4422c46ba396e5b1f1756f9a5ea24ce3f68b0824eccd = $this->env->getExtension("native_profiler");
        $__internal_10ec90de1513c17f768a4422c46ba396e5b1f1756f9a5ea24ce3f68b0824eccd->enter($__internal_10ec90de1513c17f768a4422c46ba396e5b1f1756f9a5ea24ce3f68b0824eccd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 110
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 111
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 113
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 114
            echo twig_replace_filter((isset($context["date_pattern"]) ? $context["date_pattern"] : $this->getContext($context, "date_pattern")), array("{{ year }}" =>             // line 115
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "year", array()), 'widget'), "{{ month }}" =>             // line 116
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "month", array()), 'widget'), "{{ day }}" =>             // line 117
$this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "day", array()), 'widget')));
            // line 119
            echo "</div>";
        }
        
        $__internal_10ec90de1513c17f768a4422c46ba396e5b1f1756f9a5ea24ce3f68b0824eccd->leave($__internal_10ec90de1513c17f768a4422c46ba396e5b1f1756f9a5ea24ce3f68b0824eccd_prof);

    }

    // line 123
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_2a33e1fe7ece7bb66a45a2bd278606730df37336d016f4f07cccfaa8b8a8a759 = $this->env->getExtension("native_profiler");
        $__internal_2a33e1fe7ece7bb66a45a2bd278606730df37336d016f4f07cccfaa8b8a8a759->enter($__internal_2a33e1fe7ece7bb66a45a2bd278606730df37336d016f4f07cccfaa8b8a8a759_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 124
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 125
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 127
            $context["vars"] = ((((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "text")) ? (array("attr" => array("size" => 1))) : (array()));
            // line 128
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
            ";
            // line 129
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "hour", array()), 'widget', (isset($context["vars"]) ? $context["vars"] : $this->getContext($context, "vars")));
            if ((isset($context["with_minutes"]) ? $context["with_minutes"] : $this->getContext($context, "with_minutes"))) {
                echo ":";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "minute", array()), 'widget', (isset($context["vars"]) ? $context["vars"] : $this->getContext($context, "vars")));
            }
            if ((isset($context["with_seconds"]) ? $context["with_seconds"] : $this->getContext($context, "with_seconds"))) {
                echo ":";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "second", array()), 'widget', (isset($context["vars"]) ? $context["vars"] : $this->getContext($context, "vars")));
            }
            // line 130
            echo "        </div>";
        }
        
        $__internal_2a33e1fe7ece7bb66a45a2bd278606730df37336d016f4f07cccfaa8b8a8a759->leave($__internal_2a33e1fe7ece7bb66a45a2bd278606730df37336d016f4f07cccfaa8b8a8a759_prof);

    }

    // line 134
    public function block_number_widget($context, array $blocks = array())
    {
        $__internal_9b369d6d3e91cde18204d08e48d95766bba29591168222078195b37535f257bf = $this->env->getExtension("native_profiler");
        $__internal_9b369d6d3e91cde18204d08e48d95766bba29591168222078195b37535f257bf->enter($__internal_9b369d6d3e91cde18204d08e48d95766bba29591168222078195b37535f257bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "number_widget"));

        // line 136
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "text")) : ("text"));
        // line 137
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_9b369d6d3e91cde18204d08e48d95766bba29591168222078195b37535f257bf->leave($__internal_9b369d6d3e91cde18204d08e48d95766bba29591168222078195b37535f257bf_prof);

    }

    // line 140
    public function block_integer_widget($context, array $blocks = array())
    {
        $__internal_bd54dd9d04d9a5f3392f60dbcfb63a1cac0bff0da20f16680f37fd85c2ec843c = $this->env->getExtension("native_profiler");
        $__internal_bd54dd9d04d9a5f3392f60dbcfb63a1cac0bff0da20f16680f37fd85c2ec843c->enter($__internal_bd54dd9d04d9a5f3392f60dbcfb63a1cac0bff0da20f16680f37fd85c2ec843c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "integer_widget"));

        // line 141
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "number")) : ("number"));
        // line 142
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_bd54dd9d04d9a5f3392f60dbcfb63a1cac0bff0da20f16680f37fd85c2ec843c->leave($__internal_bd54dd9d04d9a5f3392f60dbcfb63a1cac0bff0da20f16680f37fd85c2ec843c_prof);

    }

    // line 145
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_7be598a3899f46dfe4db341924ba53eea2b6b213c4b528923474cc497eaa77a8 = $this->env->getExtension("native_profiler");
        $__internal_7be598a3899f46dfe4db341924ba53eea2b6b213c4b528923474cc497eaa77a8->enter($__internal_7be598a3899f46dfe4db341924ba53eea2b6b213c4b528923474cc497eaa77a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 146
        echo twig_replace_filter((isset($context["money_pattern"]) ? $context["money_pattern"] : $this->getContext($context, "money_pattern")), array("{{ widget }}" => $this->renderBlock("form_widget_simple", $context, $blocks)));
        
        $__internal_7be598a3899f46dfe4db341924ba53eea2b6b213c4b528923474cc497eaa77a8->leave($__internal_7be598a3899f46dfe4db341924ba53eea2b6b213c4b528923474cc497eaa77a8_prof);

    }

    // line 149
    public function block_url_widget($context, array $blocks = array())
    {
        $__internal_9fa474c4b87209aa476558b8a2c4d0cfd8d5a9a6c7a040b3746ace186c6df4e4 = $this->env->getExtension("native_profiler");
        $__internal_9fa474c4b87209aa476558b8a2c4d0cfd8d5a9a6c7a040b3746ace186c6df4e4->enter($__internal_9fa474c4b87209aa476558b8a2c4d0cfd8d5a9a6c7a040b3746ace186c6df4e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "url_widget"));

        // line 150
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "url")) : ("url"));
        // line 151
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_9fa474c4b87209aa476558b8a2c4d0cfd8d5a9a6c7a040b3746ace186c6df4e4->leave($__internal_9fa474c4b87209aa476558b8a2c4d0cfd8d5a9a6c7a040b3746ace186c6df4e4_prof);

    }

    // line 154
    public function block_search_widget($context, array $blocks = array())
    {
        $__internal_bc3b3c6c3207b8a55001a18553e80412d450b87a6d86929b258c734447ced275 = $this->env->getExtension("native_profiler");
        $__internal_bc3b3c6c3207b8a55001a18553e80412d450b87a6d86929b258c734447ced275->enter($__internal_bc3b3c6c3207b8a55001a18553e80412d450b87a6d86929b258c734447ced275_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "search_widget"));

        // line 155
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "search")) : ("search"));
        // line 156
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_bc3b3c6c3207b8a55001a18553e80412d450b87a6d86929b258c734447ced275->leave($__internal_bc3b3c6c3207b8a55001a18553e80412d450b87a6d86929b258c734447ced275_prof);

    }

    // line 159
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_39bf3681e88e1e3f3651d50b74d6d0a2436e8cbadbdaaf93bcb41a4b05a6c569 = $this->env->getExtension("native_profiler");
        $__internal_39bf3681e88e1e3f3651d50b74d6d0a2436e8cbadbdaaf93bcb41a4b05a6c569->enter($__internal_39bf3681e88e1e3f3651d50b74d6d0a2436e8cbadbdaaf93bcb41a4b05a6c569_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 160
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "text")) : ("text"));
        // line 161
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo " %";
        
        $__internal_39bf3681e88e1e3f3651d50b74d6d0a2436e8cbadbdaaf93bcb41a4b05a6c569->leave($__internal_39bf3681e88e1e3f3651d50b74d6d0a2436e8cbadbdaaf93bcb41a4b05a6c569_prof);

    }

    // line 164
    public function block_password_widget($context, array $blocks = array())
    {
        $__internal_d35b13e8dbae61cf261cdb1565e7ff1af384488792b97ea9ee8259bd79c73e61 = $this->env->getExtension("native_profiler");
        $__internal_d35b13e8dbae61cf261cdb1565e7ff1af384488792b97ea9ee8259bd79c73e61->enter($__internal_d35b13e8dbae61cf261cdb1565e7ff1af384488792b97ea9ee8259bd79c73e61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "password_widget"));

        // line 165
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "password")) : ("password"));
        // line 166
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_d35b13e8dbae61cf261cdb1565e7ff1af384488792b97ea9ee8259bd79c73e61->leave($__internal_d35b13e8dbae61cf261cdb1565e7ff1af384488792b97ea9ee8259bd79c73e61_prof);

    }

    // line 169
    public function block_hidden_widget($context, array $blocks = array())
    {
        $__internal_0d15bb6bebae7f800909fdd0f7d082911e4f820f3b988b8b9fc0c3cde55f209c = $this->env->getExtension("native_profiler");
        $__internal_0d15bb6bebae7f800909fdd0f7d082911e4f820f3b988b8b9fc0c3cde55f209c->enter($__internal_0d15bb6bebae7f800909fdd0f7d082911e4f820f3b988b8b9fc0c3cde55f209c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_widget"));

        // line 170
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "hidden")) : ("hidden"));
        // line 171
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_0d15bb6bebae7f800909fdd0f7d082911e4f820f3b988b8b9fc0c3cde55f209c->leave($__internal_0d15bb6bebae7f800909fdd0f7d082911e4f820f3b988b8b9fc0c3cde55f209c_prof);

    }

    // line 174
    public function block_email_widget($context, array $blocks = array())
    {
        $__internal_b2640a24fea58aaf6070d6b58790af47f24686d9ce88318cd77873797051eba2 = $this->env->getExtension("native_profiler");
        $__internal_b2640a24fea58aaf6070d6b58790af47f24686d9ce88318cd77873797051eba2->enter($__internal_b2640a24fea58aaf6070d6b58790af47f24686d9ce88318cd77873797051eba2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "email_widget"));

        // line 175
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "email")) : ("email"));
        // line 176
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_b2640a24fea58aaf6070d6b58790af47f24686d9ce88318cd77873797051eba2->leave($__internal_b2640a24fea58aaf6070d6b58790af47f24686d9ce88318cd77873797051eba2_prof);

    }

    // line 179
    public function block_range_widget($context, array $blocks = array())
    {
        $__internal_46fecfde16299de6f1a35b3d78161c36b894c2463d049c3c885c9c22b3c85c3c = $this->env->getExtension("native_profiler");
        $__internal_46fecfde16299de6f1a35b3d78161c36b894c2463d049c3c885c9c22b3c85c3c->enter($__internal_46fecfde16299de6f1a35b3d78161c36b894c2463d049c3c885c9c22b3c85c3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "range_widget"));

        // line 180
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "range")) : ("range"));
        // line 181
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_46fecfde16299de6f1a35b3d78161c36b894c2463d049c3c885c9c22b3c85c3c->leave($__internal_46fecfde16299de6f1a35b3d78161c36b894c2463d049c3c885c9c22b3c85c3c_prof);

    }

    // line 184
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_c6f162f5430bdc3a746f34698310234f106985ab9a9749d45c2577a918a2ae70 = $this->env->getExtension("native_profiler");
        $__internal_c6f162f5430bdc3a746f34698310234f106985ab9a9749d45c2577a918a2ae70->enter($__internal_c6f162f5430bdc3a746f34698310234f106985ab9a9749d45c2577a918a2ae70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 185
        if (twig_test_empty((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")))) {
            // line 186
            if ( !twig_test_empty((isset($context["label_format"]) ? $context["label_format"] : $this->getContext($context, "label_format")))) {
                // line 187
                $context["label"] = twig_replace_filter((isset($context["label_format"]) ? $context["label_format"] : $this->getContext($context, "label_format")), array("%name%" =>                 // line 188
(isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "%id%" =>                 // line 189
(isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))));
            } else {
                // line 192
                $context["label"] = $this->env->getExtension('form')->humanize((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")));
            }
        }
        // line 195
        echo "<button type=\"";
        echo twig_escape_filter($this->env, ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "button")) : ("button")), "html", null, true);
        echo "\" ";
        $this->displayBlock("button_attributes", $context, $blocks);
        echo ">";
        echo twig_escape_filter($this->env, ((((isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")) === false)) ? ((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label"))) : ($this->env->getExtension('translator')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))))), "html", null, true);
        echo "</button>";
        
        $__internal_c6f162f5430bdc3a746f34698310234f106985ab9a9749d45c2577a918a2ae70->leave($__internal_c6f162f5430bdc3a746f34698310234f106985ab9a9749d45c2577a918a2ae70_prof);

    }

    // line 198
    public function block_submit_widget($context, array $blocks = array())
    {
        $__internal_7c793383f3fec02e686326d51578be681548529eddf22b9617f574644af79be5 = $this->env->getExtension("native_profiler");
        $__internal_7c793383f3fec02e686326d51578be681548529eddf22b9617f574644af79be5->enter($__internal_7c793383f3fec02e686326d51578be681548529eddf22b9617f574644af79be5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_widget"));

        // line 199
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "submit")) : ("submit"));
        // line 200
        $this->displayBlock("button_widget", $context, $blocks);
        
        $__internal_7c793383f3fec02e686326d51578be681548529eddf22b9617f574644af79be5->leave($__internal_7c793383f3fec02e686326d51578be681548529eddf22b9617f574644af79be5_prof);

    }

    // line 203
    public function block_reset_widget($context, array $blocks = array())
    {
        $__internal_75284c4d6394e298b053c8a2346b24acf59c1c04ebe8d40d8c68beda55bd0cdc = $this->env->getExtension("native_profiler");
        $__internal_75284c4d6394e298b053c8a2346b24acf59c1c04ebe8d40d8c68beda55bd0cdc->enter($__internal_75284c4d6394e298b053c8a2346b24acf59c1c04ebe8d40d8c68beda55bd0cdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_widget"));

        // line 204
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "reset")) : ("reset"));
        // line 205
        $this->displayBlock("button_widget", $context, $blocks);
        
        $__internal_75284c4d6394e298b053c8a2346b24acf59c1c04ebe8d40d8c68beda55bd0cdc->leave($__internal_75284c4d6394e298b053c8a2346b24acf59c1c04ebe8d40d8c68beda55bd0cdc_prof);

    }

    // line 210
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_91bb661b6e420e7e3542a3a80f40413ad608e03080335ea9c8dd73eb623acb4f = $this->env->getExtension("native_profiler");
        $__internal_91bb661b6e420e7e3542a3a80f40413ad608e03080335ea9c8dd73eb623acb4f->enter($__internal_91bb661b6e420e7e3542a3a80f40413ad608e03080335ea9c8dd73eb623acb4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 211
        if ( !((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")) === false)) {
            // line 212
            if ( !(isset($context["compound"]) ? $context["compound"] : $this->getContext($context, "compound"))) {
                // line 213
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("for" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))));
            }
            // line 215
            if ((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required"))) {
                // line 216
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => trim(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " required"))));
            }
            // line 218
            if (twig_test_empty((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")))) {
                // line 219
                if ( !twig_test_empty((isset($context["label_format"]) ? $context["label_format"] : $this->getContext($context, "label_format")))) {
                    // line 220
                    $context["label"] = twig_replace_filter((isset($context["label_format"]) ? $context["label_format"] : $this->getContext($context, "label_format")), array("%name%" =>                     // line 221
(isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "%id%" =>                     // line 222
(isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))));
                } else {
                    // line 225
                    $context["label"] = $this->env->getExtension('form')->humanize((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")));
                }
            }
            // line 228
            echo "<label";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")));
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
            echo ">";
            echo twig_escape_filter($this->env, ((((isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")) === false)) ? ((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label"))) : ($this->env->getExtension('translator')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))))), "html", null, true);
            echo "</label>";
        }
        
        $__internal_91bb661b6e420e7e3542a3a80f40413ad608e03080335ea9c8dd73eb623acb4f->leave($__internal_91bb661b6e420e7e3542a3a80f40413ad608e03080335ea9c8dd73eb623acb4f_prof);

    }

    // line 232
    public function block_button_label($context, array $blocks = array())
    {
        $__internal_284b76b7a25a8046af7862d84525ec3fed969e3df7cb8dcd692ab9e7d3bc90aa = $this->env->getExtension("native_profiler");
        $__internal_284b76b7a25a8046af7862d84525ec3fed969e3df7cb8dcd692ab9e7d3bc90aa->enter($__internal_284b76b7a25a8046af7862d84525ec3fed969e3df7cb8dcd692ab9e7d3bc90aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_label"));

        
        $__internal_284b76b7a25a8046af7862d84525ec3fed969e3df7cb8dcd692ab9e7d3bc90aa->leave($__internal_284b76b7a25a8046af7862d84525ec3fed969e3df7cb8dcd692ab9e7d3bc90aa_prof);

    }

    // line 236
    public function block_repeated_row($context, array $blocks = array())
    {
        $__internal_a28ca3124d616ad0459b3f7c4eb4cdd0f0e0da9bd6da62df0dee799e4e02945a = $this->env->getExtension("native_profiler");
        $__internal_a28ca3124d616ad0459b3f7c4eb4cdd0f0e0da9bd6da62df0dee799e4e02945a->enter($__internal_a28ca3124d616ad0459b3f7c4eb4cdd0f0e0da9bd6da62df0dee799e4e02945a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "repeated_row"));

        // line 241
        $this->displayBlock("form_rows", $context, $blocks);
        
        $__internal_a28ca3124d616ad0459b3f7c4eb4cdd0f0e0da9bd6da62df0dee799e4e02945a->leave($__internal_a28ca3124d616ad0459b3f7c4eb4cdd0f0e0da9bd6da62df0dee799e4e02945a_prof);

    }

    // line 244
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_250cfc553692aaeafa9002df2b350083710cee4f77df44d58022f89067d2212c = $this->env->getExtension("native_profiler");
        $__internal_250cfc553692aaeafa9002df2b350083710cee4f77df44d58022f89067d2212c->enter($__internal_250cfc553692aaeafa9002df2b350083710cee4f77df44d58022f89067d2212c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 245
        echo "<div>";
        // line 246
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label');
        // line 247
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        // line 248
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 249
        echo "</div>";
        
        $__internal_250cfc553692aaeafa9002df2b350083710cee4f77df44d58022f89067d2212c->leave($__internal_250cfc553692aaeafa9002df2b350083710cee4f77df44d58022f89067d2212c_prof);

    }

    // line 252
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_f9afba077067a3c4faa017c12b94bbedefebfee4ca1d3b3de4453cdba066056e = $this->env->getExtension("native_profiler");
        $__internal_f9afba077067a3c4faa017c12b94bbedefebfee4ca1d3b3de4453cdba066056e->enter($__internal_f9afba077067a3c4faa017c12b94bbedefebfee4ca1d3b3de4453cdba066056e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 253
        echo "<div>";
        // line 254
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 255
        echo "</div>";
        
        $__internal_f9afba077067a3c4faa017c12b94bbedefebfee4ca1d3b3de4453cdba066056e->leave($__internal_f9afba077067a3c4faa017c12b94bbedefebfee4ca1d3b3de4453cdba066056e_prof);

    }

    // line 258
    public function block_hidden_row($context, array $blocks = array())
    {
        $__internal_fa805ecf2c15c9d3149c4fc4bc8094329199205aae3095a724e09c901ee917cd = $this->env->getExtension("native_profiler");
        $__internal_fa805ecf2c15c9d3149c4fc4bc8094329199205aae3095a724e09c901ee917cd->enter($__internal_fa805ecf2c15c9d3149c4fc4bc8094329199205aae3095a724e09c901ee917cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        // line 259
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        
        $__internal_fa805ecf2c15c9d3149c4fc4bc8094329199205aae3095a724e09c901ee917cd->leave($__internal_fa805ecf2c15c9d3149c4fc4bc8094329199205aae3095a724e09c901ee917cd_prof);

    }

    // line 264
    public function block_form($context, array $blocks = array())
    {
        $__internal_3df95f34273cbb277b605744ccdbbf74271730e09b39df38694baa71a25def48 = $this->env->getExtension("native_profiler");
        $__internal_3df95f34273cbb277b605744ccdbbf74271730e09b39df38694baa71a25def48->enter($__internal_3df95f34273cbb277b605744ccdbbf74271730e09b39df38694baa71a25def48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 265
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        // line 266
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 267
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        
        $__internal_3df95f34273cbb277b605744ccdbbf74271730e09b39df38694baa71a25def48->leave($__internal_3df95f34273cbb277b605744ccdbbf74271730e09b39df38694baa71a25def48_prof);

    }

    // line 270
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_db67d02ea148caa740488f8bed88a96bf1b50e25a235f5962256d331e2acfcf5 = $this->env->getExtension("native_profiler");
        $__internal_db67d02ea148caa740488f8bed88a96bf1b50e25a235f5962256d331e2acfcf5->enter($__internal_db67d02ea148caa740488f8bed88a96bf1b50e25a235f5962256d331e2acfcf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        // line 271
        $context["method"] = twig_upper_filter($this->env, (isset($context["method"]) ? $context["method"] : $this->getContext($context, "method")));
        // line 272
        if (twig_in_filter((isset($context["method"]) ? $context["method"] : $this->getContext($context, "method")), array(0 => "GET", 1 => "POST"))) {
            // line 273
            $context["form_method"] = (isset($context["method"]) ? $context["method"] : $this->getContext($context, "method"));
        } else {
            // line 275
            $context["form_method"] = "POST";
        }
        // line 277
        echo "<form name=\"";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "\" method=\"";
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, (isset($context["form_method"]) ? $context["form_method"] : $this->getContext($context, "form_method"))), "html", null, true);
        echo "\"";
        if (((isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")) != "")) {
            echo " action=\"";
            echo twig_escape_filter($this->env, (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")), "html", null, true);
            echo "\"";
        }
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")));
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
        if ((isset($context["multipart"]) ? $context["multipart"] : $this->getContext($context, "multipart"))) {
            echo " enctype=\"multipart/form-data\"";
        }
        echo ">";
        // line 278
        if (((isset($context["form_method"]) ? $context["form_method"] : $this->getContext($context, "form_method")) != (isset($context["method"]) ? $context["method"] : $this->getContext($context, "method")))) {
            // line 279
            echo "<input type=\"hidden\" name=\"_method\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["method"]) ? $context["method"] : $this->getContext($context, "method")), "html", null, true);
            echo "\" />";
        }
        
        $__internal_db67d02ea148caa740488f8bed88a96bf1b50e25a235f5962256d331e2acfcf5->leave($__internal_db67d02ea148caa740488f8bed88a96bf1b50e25a235f5962256d331e2acfcf5_prof);

    }

    // line 283
    public function block_form_end($context, array $blocks = array())
    {
        $__internal_979389af34778fe85108b2375588184dd39644145b5107493e4db3d6189a47cd = $this->env->getExtension("native_profiler");
        $__internal_979389af34778fe85108b2375588184dd39644145b5107493e4db3d6189a47cd->enter($__internal_979389af34778fe85108b2375588184dd39644145b5107493e4db3d6189a47cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_end"));

        // line 284
        if (( !array_key_exists("render_rest", $context) || (isset($context["render_rest"]) ? $context["render_rest"] : $this->getContext($context, "render_rest")))) {
            // line 285
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        }
        // line 287
        echo "</form>";
        
        $__internal_979389af34778fe85108b2375588184dd39644145b5107493e4db3d6189a47cd->leave($__internal_979389af34778fe85108b2375588184dd39644145b5107493e4db3d6189a47cd_prof);

    }

    // line 290
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_74be4917da903793fa46ffbc5d0902f90ff81940007a6c840235e91ef86e50e9 = $this->env->getExtension("native_profiler");
        $__internal_74be4917da903793fa46ffbc5d0902f90ff81940007a6c840235e91ef86e50e9->enter($__internal_74be4917da903793fa46ffbc5d0902f90ff81940007a6c840235e91ef86e50e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 291
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) {
            // line 292
            echo "<ul>";
            // line 293
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors")));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 294
                echo "<li>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                echo "</li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 296
            echo "</ul>";
        }
        
        $__internal_74be4917da903793fa46ffbc5d0902f90ff81940007a6c840235e91ef86e50e9->leave($__internal_74be4917da903793fa46ffbc5d0902f90ff81940007a6c840235e91ef86e50e9_prof);

    }

    // line 300
    public function block_form_rest($context, array $blocks = array())
    {
        $__internal_38478d9ad83a31798fc14b921bdd2b6e0fa3dfaabf7bca5d9ae266bfe9787b46 = $this->env->getExtension("native_profiler");
        $__internal_38478d9ad83a31798fc14b921bdd2b6e0fa3dfaabf7bca5d9ae266bfe9787b46->enter($__internal_38478d9ad83a31798fc14b921bdd2b6e0fa3dfaabf7bca5d9ae266bfe9787b46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_rest"));

        // line 301
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 302
            if ( !$this->getAttribute($context["child"], "rendered", array())) {
                // line 303
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["child"], 'row');
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_38478d9ad83a31798fc14b921bdd2b6e0fa3dfaabf7bca5d9ae266bfe9787b46->leave($__internal_38478d9ad83a31798fc14b921bdd2b6e0fa3dfaabf7bca5d9ae266bfe9787b46_prof);

    }

    // line 310
    public function block_form_rows($context, array $blocks = array())
    {
        $__internal_fd6e579badb093357538661f926cfaf9c66f9bb740c09dd6d2c4ffa0a3075489 = $this->env->getExtension("native_profiler");
        $__internal_fd6e579badb093357538661f926cfaf9c66f9bb740c09dd6d2c4ffa0a3075489->enter($__internal_fd6e579badb093357538661f926cfaf9c66f9bb740c09dd6d2c4ffa0a3075489_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_rows"));

        // line 311
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 312
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["child"], 'row');
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_fd6e579badb093357538661f926cfaf9c66f9bb740c09dd6d2c4ffa0a3075489->leave($__internal_fd6e579badb093357538661f926cfaf9c66f9bb740c09dd6d2c4ffa0a3075489_prof);

    }

    // line 316
    public function block_widget_attributes($context, array $blocks = array())
    {
        $__internal_86b5293f56805975e46e24b85f4a95bebbbfc8d9bfc47154b00121edbe709921 = $this->env->getExtension("native_profiler");
        $__internal_86b5293f56805975e46e24b85f4a95bebbbfc8d9bfc47154b00121edbe709921->enter($__internal_86b5293f56805975e46e24b85f4a95bebbbfc8d9bfc47154b00121edbe709921_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widget_attributes"));

        // line 317
        echo "id=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, (isset($context["full_name"]) ? $context["full_name"] : $this->getContext($context, "full_name")), "html", null, true);
        echo "\"";
        // line 318
        if ((isset($context["disabled"]) ? $context["disabled"] : $this->getContext($context, "disabled"))) {
            echo " disabled=\"disabled\"";
        }
        // line 319
        if ((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required"))) {
            echo " required=\"required\"";
        }
        // line 320
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            // line 321
            echo " ";
            // line 322
            if (twig_in_filter($context["attrname"], array(0 => "placeholder", 1 => "title"))) {
                // line 323
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, ((((isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")) === false)) ? ($context["attrvalue"]) : ($this->env->getExtension('translator')->trans($context["attrvalue"], array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))))), "html", null, true);
                echo "\"";
            } elseif ((            // line 324
$context["attrvalue"] === true)) {
                // line 325
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "\"";
            } elseif ( !(            // line 326
$context["attrvalue"] === false)) {
                // line 327
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_86b5293f56805975e46e24b85f4a95bebbbfc8d9bfc47154b00121edbe709921->leave($__internal_86b5293f56805975e46e24b85f4a95bebbbfc8d9bfc47154b00121edbe709921_prof);

    }

    // line 332
    public function block_widget_container_attributes($context, array $blocks = array())
    {
        $__internal_f8a004bf69fd3a6f357fc8d8792abadbeec8b22b0465924951b081764fba4803 = $this->env->getExtension("native_profiler");
        $__internal_f8a004bf69fd3a6f357fc8d8792abadbeec8b22b0465924951b081764fba4803->enter($__internal_f8a004bf69fd3a6f357fc8d8792abadbeec8b22b0465924951b081764fba4803_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widget_container_attributes"));

        // line 333
        if ( !twig_test_empty((isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")))) {
            echo "id=\"";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "\"";
        }
        // line 334
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            // line 335
            echo " ";
            // line 336
            if (twig_in_filter($context["attrname"], array(0 => "placeholder", 1 => "title"))) {
                // line 337
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, ((((isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")) === false)) ? ($context["attrvalue"]) : ($this->env->getExtension('translator')->trans($context["attrvalue"], array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))))), "html", null, true);
                echo "\"";
            } elseif ((            // line 338
$context["attrvalue"] === true)) {
                // line 339
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "\"";
            } elseif ( !(            // line 340
$context["attrvalue"] === false)) {
                // line 341
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_f8a004bf69fd3a6f357fc8d8792abadbeec8b22b0465924951b081764fba4803->leave($__internal_f8a004bf69fd3a6f357fc8d8792abadbeec8b22b0465924951b081764fba4803_prof);

    }

    // line 346
    public function block_button_attributes($context, array $blocks = array())
    {
        $__internal_ec6fcd2b1b9a16144b83dff007a53d7bd672de4e778cc7482bad8caf354da192 = $this->env->getExtension("native_profiler");
        $__internal_ec6fcd2b1b9a16144b83dff007a53d7bd672de4e778cc7482bad8caf354da192->enter($__internal_ec6fcd2b1b9a16144b83dff007a53d7bd672de4e778cc7482bad8caf354da192_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_attributes"));

        // line 347
        echo "id=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, (isset($context["full_name"]) ? $context["full_name"] : $this->getContext($context, "full_name")), "html", null, true);
        echo "\"";
        if ((isset($context["disabled"]) ? $context["disabled"] : $this->getContext($context, "disabled"))) {
            echo " disabled=\"disabled\"";
        }
        // line 348
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            // line 349
            echo " ";
            // line 350
            if (twig_in_filter($context["attrname"], array(0 => "placeholder", 1 => "title"))) {
                // line 351
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, ((((isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")) === false)) ? ($context["attrvalue"]) : ($this->env->getExtension('translator')->trans($context["attrvalue"], array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))))), "html", null, true);
                echo "\"";
            } elseif ((            // line 352
$context["attrvalue"] === true)) {
                // line 353
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "\"";
            } elseif ( !(            // line 354
$context["attrvalue"] === false)) {
                // line 355
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_ec6fcd2b1b9a16144b83dff007a53d7bd672de4e778cc7482bad8caf354da192->leave($__internal_ec6fcd2b1b9a16144b83dff007a53d7bd672de4e778cc7482bad8caf354da192_prof);

    }

    // line 360
    public function block_attributes($context, array $blocks = array())
    {
        $__internal_8f50f387bf4df2954aed630b9c741b429048cf69b374ef486ec0886ac4b081e3 = $this->env->getExtension("native_profiler");
        $__internal_8f50f387bf4df2954aed630b9c741b429048cf69b374ef486ec0886ac4b081e3->enter($__internal_8f50f387bf4df2954aed630b9c741b429048cf69b374ef486ec0886ac4b081e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "attributes"));

        // line 361
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            // line 362
            echo " ";
            // line 363
            if (twig_in_filter($context["attrname"], array(0 => "placeholder", 1 => "title"))) {
                // line 364
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, ((((isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")) === false)) ? ($context["attrvalue"]) : ($this->env->getExtension('translator')->trans($context["attrvalue"], array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))))), "html", null, true);
                echo "\"";
            } elseif ((            // line 365
$context["attrvalue"] === true)) {
                // line 366
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "\"";
            } elseif ( !(            // line 367
$context["attrvalue"] === false)) {
                // line 368
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_8f50f387bf4df2954aed630b9c741b429048cf69b374ef486ec0886ac4b081e3->leave($__internal_8f50f387bf4df2954aed630b9c741b429048cf69b374ef486ec0886ac4b081e3_prof);

    }

    public function getTemplateName()
    {
        return "form_div_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  1266 => 368,  1264 => 367,  1259 => 366,  1257 => 365,  1252 => 364,  1250 => 363,  1248 => 362,  1244 => 361,  1238 => 360,  1223 => 355,  1221 => 354,  1216 => 353,  1214 => 352,  1209 => 351,  1207 => 350,  1205 => 349,  1201 => 348,  1192 => 347,  1186 => 346,  1171 => 341,  1169 => 340,  1164 => 339,  1162 => 338,  1157 => 337,  1155 => 336,  1153 => 335,  1149 => 334,  1143 => 333,  1137 => 332,  1122 => 327,  1120 => 326,  1115 => 325,  1113 => 324,  1108 => 323,  1106 => 322,  1104 => 321,  1100 => 320,  1096 => 319,  1092 => 318,  1086 => 317,  1080 => 316,  1069 => 312,  1065 => 311,  1059 => 310,  1047 => 303,  1045 => 302,  1041 => 301,  1035 => 300,  1027 => 296,  1019 => 294,  1015 => 293,  1013 => 292,  1011 => 291,  1005 => 290,  998 => 287,  995 => 285,  993 => 284,  987 => 283,  977 => 279,  975 => 278,  948 => 277,  945 => 275,  942 => 273,  940 => 272,  938 => 271,  932 => 270,  925 => 267,  923 => 266,  921 => 265,  915 => 264,  908 => 259,  902 => 258,  895 => 255,  893 => 254,  891 => 253,  885 => 252,  878 => 249,  876 => 248,  874 => 247,  872 => 246,  870 => 245,  864 => 244,  857 => 241,  851 => 236,  840 => 232,  817 => 228,  813 => 225,  810 => 222,  809 => 221,  808 => 220,  806 => 219,  804 => 218,  801 => 216,  799 => 215,  796 => 213,  794 => 212,  792 => 211,  786 => 210,  779 => 205,  777 => 204,  771 => 203,  764 => 200,  762 => 199,  756 => 198,  743 => 195,  739 => 192,  736 => 189,  735 => 188,  734 => 187,  732 => 186,  730 => 185,  724 => 184,  717 => 181,  715 => 180,  709 => 179,  702 => 176,  700 => 175,  694 => 174,  687 => 171,  685 => 170,  679 => 169,  672 => 166,  670 => 165,  664 => 164,  656 => 161,  654 => 160,  648 => 159,  641 => 156,  639 => 155,  633 => 154,  626 => 151,  624 => 150,  618 => 149,  611 => 146,  605 => 145,  598 => 142,  596 => 141,  590 => 140,  583 => 137,  581 => 136,  575 => 134,  567 => 130,  557 => 129,  552 => 128,  550 => 127,  547 => 125,  545 => 124,  539 => 123,  531 => 119,  529 => 117,  528 => 116,  527 => 115,  526 => 114,  522 => 113,  519 => 111,  517 => 110,  511 => 109,  503 => 105,  501 => 104,  499 => 103,  497 => 102,  495 => 101,  491 => 100,  488 => 98,  486 => 97,  480 => 96,  463 => 93,  457 => 92,  440 => 89,  434 => 88,  405 => 83,  403 => 82,  400 => 80,  398 => 79,  396 => 78,  391 => 77,  389 => 76,  372 => 75,  366 => 74,  359 => 71,  357 => 70,  355 => 69,  349 => 66,  347 => 65,  345 => 64,  343 => 63,  341 => 62,  332 => 60,  330 => 59,  323 => 58,  320 => 56,  318 => 55,  312 => 54,  305 => 51,  299 => 49,  297 => 48,  293 => 47,  289 => 46,  283 => 45,  275 => 41,  272 => 39,  270 => 38,  264 => 37,  253 => 34,  247 => 33,  240 => 30,  237 => 28,  235 => 27,  229 => 26,  222 => 23,  220 => 22,  218 => 21,  215 => 19,  213 => 18,  209 => 17,  203 => 16,  186 => 13,  184 => 12,  178 => 11,  170 => 7,  167 => 5,  165 => 4,  159 => 3,  152 => 360,  150 => 346,  148 => 332,  146 => 316,  144 => 310,  141 => 307,  139 => 300,  137 => 290,  135 => 283,  133 => 270,  131 => 264,  129 => 258,  127 => 252,  125 => 244,  123 => 236,  121 => 232,  119 => 210,  117 => 203,  115 => 198,  113 => 184,  111 => 179,  109 => 174,  107 => 169,  105 => 164,  103 => 159,  101 => 154,  99 => 149,  97 => 145,  95 => 140,  93 => 134,  91 => 123,  89 => 109,  87 => 96,  85 => 92,  83 => 88,  81 => 74,  79 => 54,  77 => 45,  75 => 37,  73 => 33,  71 => 26,  69 => 16,  67 => 11,  65 => 3,);
    }
}
/* {# Widgets #}*/
/* */
/* {%- block form_widget -%}*/
/*     {% if compound %}*/
/*         {{- block('form_widget_compound') -}}*/
/*     {% else %}*/
/*         {{- block('form_widget_simple') -}}*/
/*     {% endif %}*/
/* {%- endblock form_widget -%}*/
/* */
/* {%- block form_widget_simple -%}*/
/*     {%- set type = type|default('text') -%}*/
/*     <input type="{{ type }}" {{ block('widget_attributes') }} {% if value is not empty %}value="{{ value }}" {% endif %}/>*/
/* {%- endblock form_widget_simple -%}*/
/* */
/* {%- block form_widget_compound -%}*/
/*     <div {{ block('widget_container_attributes') }}>*/
/*         {%- if form.parent is empty -%}*/
/*             {{ form_errors(form) }}*/
/*         {%- endif -%}*/
/*         {{- block('form_rows') -}}*/
/*         {{- form_rest(form) -}}*/
/*     </div>*/
/* {%- endblock form_widget_compound -%}*/
/* */
/* {%- block collection_widget -%}*/
/*     {% if prototype is defined %}*/
/*         {%- set attr = attr|merge({'data-prototype': form_row(prototype) }) -%}*/
/*     {% endif %}*/
/*     {{- block('form_widget') -}}*/
/* {%- endblock collection_widget -%}*/
/* */
/* {%- block textarea_widget -%}*/
/*     <textarea {{ block('widget_attributes') }}>{{ value }}</textarea>*/
/* {%- endblock textarea_widget -%}*/
/* */
/* {%- block choice_widget -%}*/
/*     {% if expanded %}*/
/*         {{- block('choice_widget_expanded') -}}*/
/*     {% else %}*/
/*         {{- block('choice_widget_collapsed') -}}*/
/*     {% endif %}*/
/* {%- endblock choice_widget -%}*/
/* */
/* {%- block choice_widget_expanded -%}*/
/*     <div {{ block('widget_container_attributes') }}>*/
/*     {%- for child in form %}*/
/*         {{- form_widget(child) -}}*/
/*         {{- form_label(child, null, {translation_domain: choice_translation_domain}) -}}*/
/*     {% endfor -%}*/
/*     </div>*/
/* {%- endblock choice_widget_expanded -%}*/
/* */
/* {%- block choice_widget_collapsed -%}*/
/*     {%- if required and placeholder is none and not placeholder_in_choices and not multiple and (attr.size is not defined or attr.size <= 1) -%}*/
/*         {% set required = false %}*/
/*     {%- endif -%}*/
/*     <select {{ block('widget_attributes') }}{% if multiple %} multiple="multiple"{% endif %}>*/
/*         {%- if placeholder is not none -%}*/
/*             <option value=""{% if required and value is empty %} selected="selected"{% endif %}>{{ placeholder != '' ? (translation_domain is same as(false) ? placeholder : placeholder|trans({}, translation_domain)) }}</option>*/
/*         {%- endif -%}*/
/*         {%- if preferred_choices|length > 0 -%}*/
/*             {% set options = preferred_choices %}*/
/*             {{- block('choice_widget_options') -}}*/
/*             {%- if choices|length > 0 and separator is not none -%}*/
/*                 <option disabled="disabled">{{ separator }}</option>*/
/*             {%- endif -%}*/
/*         {%- endif -%}*/
/*         {%- set options = choices -%}*/
/*         {{- block('choice_widget_options') -}}*/
/*     </select>*/
/* {%- endblock choice_widget_collapsed -%}*/
/* */
/* {%- block choice_widget_options -%}*/
/*     {% for group_label, choice in options %}*/
/*         {%- if choice is iterable -%}*/
/*             <optgroup label="{{ choice_translation_domain is same as(false) ? group_label : group_label|trans({}, choice_translation_domain) }}">*/
/*                 {% set options = choice %}*/
/*                 {{- block('choice_widget_options') -}}*/
/*             </optgroup>*/
/*         {%- else -%}*/
/*             {% set attr = choice.attr %}*/
/*             <option value="{{ choice.value }}" {{ block('attributes') }}{% if choice is selectedchoice(value) %} selected="selected"{% endif %}>{{ choice_translation_domain is same as(false) ? choice.label : choice.label|trans({}, choice_translation_domain) }}</option>*/
/*         {%- endif -%}*/
/*     {% endfor %}*/
/* {%- endblock choice_widget_options -%}*/
/* */
/* {%- block checkbox_widget -%}*/
/*     <input type="checkbox" {{ block('widget_attributes') }}{% if value is defined %} value="{{ value }}"{% endif %}{% if checked %} checked="checked"{% endif %} />*/
/* {%- endblock checkbox_widget -%}*/
/* */
/* {%- block radio_widget -%}*/
/*     <input type="radio" {{ block('widget_attributes') }}{% if value is defined %} value="{{ value }}"{% endif %}{% if checked %} checked="checked"{% endif %} />*/
/* {%- endblock radio_widget -%}*/
/* */
/* {%- block datetime_widget -%}*/
/*     {% if widget == 'single_text' %}*/
/*         {{- block('form_widget_simple') -}}*/
/*     {%- else -%}*/
/*         <div {{ block('widget_container_attributes') }}>*/
/*             {{- form_errors(form.date) -}}*/
/*             {{- form_errors(form.time) -}}*/
/*             {{- form_widget(form.date) -}}*/
/*             {{- form_widget(form.time) -}}*/
/*         </div>*/
/*     {%- endif -%}*/
/* {%- endblock datetime_widget -%}*/
/* */
/* {%- block date_widget -%}*/
/*     {%- if widget == 'single_text' -%}*/
/*         {{ block('form_widget_simple') }}*/
/*     {%- else -%}*/
/*         <div {{ block('widget_container_attributes') }}>*/
/*             {{- date_pattern|replace({*/
/*                 '{{ year }}':  form_widget(form.year),*/
/*                 '{{ month }}': form_widget(form.month),*/
/*                 '{{ day }}':   form_widget(form.day),*/
/*             })|raw -}}*/
/*         </div>*/
/*     {%- endif -%}*/
/* {%- endblock date_widget -%}*/
/* */
/* {%- block time_widget -%}*/
/*     {%- if widget == 'single_text' -%}*/
/*         {{ block('form_widget_simple') }}*/
/*     {%- else -%}*/
/*         {%- set vars = widget == 'text' ? { 'attr': { 'size': 1 }} : {} -%}*/
/*         <div {{ block('widget_container_attributes') }}>*/
/*             {{ form_widget(form.hour, vars) }}{% if with_minutes %}:{{ form_widget(form.minute, vars) }}{% endif %}{% if with_seconds %}:{{ form_widget(form.second, vars) }}{% endif %}*/
/*         </div>*/
/*     {%- endif -%}*/
/* {%- endblock time_widget -%}*/
/* */
/* {%- block number_widget -%}*/
/*     {# type="number" doesn't work with floats #}*/
/*     {%- set type = type|default('text') -%}*/
/*     {{ block('form_widget_simple') }}*/
/* {%- endblock number_widget -%}*/
/* */
/* {%- block integer_widget -%}*/
/*     {%- set type = type|default('number') -%}*/
/*     {{ block('form_widget_simple') }}*/
/* {%- endblock integer_widget -%}*/
/* */
/* {%- block money_widget -%}*/
/*     {{ money_pattern|replace({ '{{ widget }}': block('form_widget_simple') })|raw }}*/
/* {%- endblock money_widget -%}*/
/* */
/* {%- block url_widget -%}*/
/*     {%- set type = type|default('url') -%}*/
/*     {{ block('form_widget_simple') }}*/
/* {%- endblock url_widget -%}*/
/* */
/* {%- block search_widget -%}*/
/*     {%- set type = type|default('search') -%}*/
/*     {{ block('form_widget_simple') }}*/
/* {%- endblock search_widget -%}*/
/* */
/* {%- block percent_widget -%}*/
/*     {%- set type = type|default('text') -%}*/
/*     {{ block('form_widget_simple') }} %*/
/* {%- endblock percent_widget -%}*/
/* */
/* {%- block password_widget -%}*/
/*     {%- set type = type|default('password') -%}*/
/*     {{ block('form_widget_simple') }}*/
/* {%- endblock password_widget -%}*/
/* */
/* {%- block hidden_widget -%}*/
/*     {%- set type = type|default('hidden') -%}*/
/*     {{ block('form_widget_simple') }}*/
/* {%- endblock hidden_widget -%}*/
/* */
/* {%- block email_widget -%}*/
/*     {%- set type = type|default('email') -%}*/
/*     {{ block('form_widget_simple') }}*/
/* {%- endblock email_widget -%}*/
/* */
/* {%- block range_widget -%}*/
/*     {% set type = type|default('range') %}*/
/*     {{- block('form_widget_simple') -}}*/
/* {%- endblock range_widget %}*/
/* */
/* {%- block button_widget -%}*/
/*     {%- if label is empty -%}*/
/*         {%- if label_format is not empty -%}*/
/*             {% set label = label_format|replace({*/
/*                 '%name%': name,*/
/*                 '%id%': id,*/
/*             }) %}*/
/*         {%- else -%}*/
/*             {% set label = name|humanize %}*/
/*         {%- endif -%}*/
/*     {%- endif -%}*/
/*     <button type="{{ type|default('button') }}" {{ block('button_attributes') }}>{{ translation_domain is same as(false) ? label : label|trans({}, translation_domain) }}</button>*/
/* {%- endblock button_widget -%}*/
/* */
/* {%- block submit_widget -%}*/
/*     {%- set type = type|default('submit') -%}*/
/*     {{ block('button_widget') }}*/
/* {%- endblock submit_widget -%}*/
/* */
/* {%- block reset_widget -%}*/
/*     {%- set type = type|default('reset') -%}*/
/*     {{ block('button_widget') }}*/
/* {%- endblock reset_widget -%}*/
/* */
/* {# Labels #}*/
/* */
/* {%- block form_label -%}*/
/*     {% if label is not same as(false) -%}*/
/*         {% if not compound -%}*/
/*             {% set label_attr = label_attr|merge({'for': id}) %}*/
/*         {%- endif -%}*/
/*         {% if required -%}*/
/*             {% set label_attr = label_attr|merge({'class': (label_attr.class|default('') ~ ' required')|trim}) %}*/
/*         {%- endif -%}*/
/*         {% if label is empty -%}*/
/*             {%- if label_format is not empty -%}*/
/*                 {% set label = label_format|replace({*/
/*                     '%name%': name,*/
/*                     '%id%': id,*/
/*                 }) %}*/
/*             {%- else -%}*/
/*                 {% set label = name|humanize %}*/
/*             {%- endif -%}*/
/*         {%- endif -%}*/
/*         <label{% for attrname, attrvalue in label_attr %} {{ attrname }}="{{ attrvalue }}"{% endfor %}>{{ translation_domain is same as(false) ? label : label|trans({}, translation_domain) }}</label>*/
/*     {%- endif -%}*/
/* {%- endblock form_label -%}*/
/* */
/* {%- block button_label -%}{%- endblock -%}*/
/* */
/* {# Rows #}*/
/* */
/* {%- block repeated_row -%}*/
/*     {#*/
/*     No need to render the errors here, as all errors are mapped*/
/*     to the first child (see RepeatedTypeValidatorExtension).*/
/*     #}*/
/*     {{- block('form_rows') -}}*/
/* {%- endblock repeated_row -%}*/
/* */
/* {%- block form_row -%}*/
/*     <div>*/
/*         {{- form_label(form) -}}*/
/*         {{- form_errors(form) -}}*/
/*         {{- form_widget(form) -}}*/
/*     </div>*/
/* {%- endblock form_row -%}*/
/* */
/* {%- block button_row -%}*/
/*     <div>*/
/*         {{- form_widget(form) -}}*/
/*     </div>*/
/* {%- endblock button_row -%}*/
/* */
/* {%- block hidden_row -%}*/
/*     {{ form_widget(form) }}*/
/* {%- endblock hidden_row -%}*/
/* */
/* {# Misc #}*/
/* */
/* {%- block form -%}*/
/*     {{ form_start(form) }}*/
/*         {{- form_widget(form) -}}*/
/*     {{ form_end(form) }}*/
/* {%- endblock form -%}*/
/* */
/* {%- block form_start -%}*/
/*     {% set method = method|upper %}*/
/*     {%- if method in ["GET", "POST"] -%}*/
/*         {% set form_method = method %}*/
/*     {%- else -%}*/
/*         {% set form_method = "POST" %}*/
/*     {%- endif -%}*/
/*     <form name="{{ name }}" method="{{ form_method|lower }}"{% if action != '' %} action="{{ action }}"{% endif %}{% for attrname, attrvalue in attr %} {{ attrname }}="{{ attrvalue }}"{% endfor %}{% if multipart %} enctype="multipart/form-data"{% endif %}>*/
/*     {%- if form_method != method -%}*/
/*         <input type="hidden" name="_method" value="{{ method }}" />*/
/*     {%- endif -%}*/
/* {%- endblock form_start -%}*/
/* */
/* {%- block form_end -%}*/
/*     {%- if not render_rest is defined or render_rest -%}*/
/*         {{ form_rest(form) }}*/
/*     {%- endif -%}*/
/*     </form>*/
/* {%- endblock form_end -%}*/
/* */
/* {%- block form_errors -%}*/
/*     {%- if errors|length > 0 -%}*/
/*     <ul>*/
/*         {%- for error in errors -%}*/
/*             <li>{{ error.message }}</li>*/
/*         {%- endfor -%}*/
/*     </ul>*/
/*     {%- endif -%}*/
/* {%- endblock form_errors -%}*/
/* */
/* {%- block form_rest -%}*/
/*     {% for child in form -%}*/
/*         {% if not child.rendered %}*/
/*             {{- form_row(child) -}}*/
/*         {% endif %}*/
/*     {%- endfor %}*/
/* {% endblock form_rest %}*/
/* */
/* {# Support #}*/
/* */
/* {%- block form_rows -%}*/
/*     {% for child in form %}*/
/*         {{- form_row(child) -}}*/
/*     {% endfor %}*/
/* {%- endblock form_rows -%}*/
/* */
/* {%- block widget_attributes -%}*/
/*     id="{{ id }}" name="{{ full_name }}"*/
/*     {%- if disabled %} disabled="disabled"{% endif -%}*/
/*     {%- if required %} required="required"{% endif -%}*/
/*     {%- for attrname, attrvalue in attr -%}*/
/*         {{- " " -}}*/
/*         {%- if attrname in ['placeholder', 'title'] -%}*/
/*             {{- attrname }}="{{ translation_domain is same as(false) ? attrvalue : attrvalue|trans({}, translation_domain) }}"*/
/*         {%- elseif attrvalue is same as(true) -%}*/
/*             {{- attrname }}="{{ attrname }}"*/
/*         {%- elseif attrvalue is not same as(false) -%}*/
/*             {{- attrname }}="{{ attrvalue }}"*/
/*         {%- endif -%}*/
/*     {%- endfor -%}*/
/* {%- endblock widget_attributes -%}*/
/* */
/* {%- block widget_container_attributes -%}*/
/*     {%- if id is not empty %}id="{{ id }}"{% endif -%}*/
/*     {%- for attrname, attrvalue in attr -%}*/
/*         {{- " " -}}*/
/*         {%- if attrname in ['placeholder', 'title'] -%}*/
/*             {{- attrname }}="{{ translation_domain is same as(false) ? attrvalue : attrvalue|trans({}, translation_domain) }}"*/
/*         {%- elseif attrvalue is same as(true) -%}*/
/*             {{- attrname }}="{{ attrname }}"*/
/*         {%- elseif attrvalue is not same as(false) -%}*/
/*             {{- attrname }}="{{ attrvalue }}"*/
/*         {%- endif -%}*/
/*     {%- endfor -%}*/
/* {%- endblock widget_container_attributes -%}*/
/* */
/* {%- block button_attributes -%}*/
/*     id="{{ id }}" name="{{ full_name }}"{% if disabled %} disabled="disabled"{% endif -%}*/
/*     {%- for attrname, attrvalue in attr -%}*/
/*         {{- " " -}}*/
/*         {%- if attrname in ['placeholder', 'title'] -%}*/
/*             {{- attrname }}="{{ translation_domain is same as(false) ? attrvalue : attrvalue|trans({}, translation_domain) }}"*/
/*         {%- elseif attrvalue is same as(true) -%}*/
/*             {{- attrname }}="{{ attrname }}"*/
/*         {%- elseif attrvalue is not same as(false) -%}*/
/*             {{- attrname }}="{{ attrvalue }}"*/
/*         {%- endif -%}*/
/*     {%- endfor -%}*/
/* {%- endblock button_attributes -%}*/
/* */
/* {% block attributes -%}*/
/*     {%- for attrname, attrvalue in attr -%}*/
/*         {{- " " -}}*/
/*         {%- if attrname in ['placeholder', 'title'] -%}*/
/*             {{- attrname }}="{{ translation_domain is same as(false) ? attrvalue : attrvalue|trans({}, translation_domain) }}"*/
/*         {%- elseif attrvalue is same as(true) -%}*/
/*             {{- attrname }}="{{ attrname }}"*/
/*         {%- elseif attrvalue is not same as(false) -%}*/
/*             {{- attrname }}="{{ attrvalue }}"*/
/*         {%- endif -%}*/
/*     {%- endfor -%}*/
/* {%- endblock attributes -%}*/
/* */
