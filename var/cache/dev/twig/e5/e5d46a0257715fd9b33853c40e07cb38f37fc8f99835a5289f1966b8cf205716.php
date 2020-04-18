<?php

/* @ArtgrisMedia/form/field_media.html.twig */
class __TwigTemplate_7588bbba0864b4f336b357f3ff4acd53e40f45d80911b7c8d9ee8e6efde5a4ed extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'artgris_media_widget' => array($this, 'block_artgris_media_widget'),
            'artgris_media_collection_widget' => array($this, 'block_artgris_media_collection_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ArtgrisMedia/form/field_media.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ArtgrisMedia/form/field_media.html.twig"));

        // line 1
        $this->displayBlock('artgris_media_widget', $context, $blocks);
        // line 12
        echo "
";
        // line 13
        $this->displayBlock('artgris_media_collection_widget', $context, $blocks);
        // line 42
        echo "
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 1
    public function block_artgris_media_widget($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "artgris_media_widget"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "artgris_media_widget"));

        // line 2
        echo "
    ";
        // line 3
        $context["artgris"] = $this;
        // line 4
        echo "
    ";
        // line 5
        ob_start();
        // line 6
        echo "        ";
        echo $context["artgris"]->getrender_media(($context["form"] ?? $this->getContext($context, "form")), false, $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "id", array()), ($context["conf"] ?? $this->getContext($context, "conf")));
        echo "
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 8
        echo "
    ";
        // line 9
        $this->loadTemplate("@ArtgrisMedia/form/_modal.html.twig", "@ArtgrisMedia/form/field_media.html.twig", 9)->display($context);
        // line 10
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 13
    public function block_artgris_media_collection_widget($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "artgris_media_collection_widget"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "artgris_media_collection_widget"));

        // line 14
        echo "
    ";
        // line 15
        $context["artgris"] = $this;
        // line 16
        echo "
    ";
        // line 17
        ob_start();
        // line 18
        echo "        ";
        if ((isset($context["prototype"]) || array_key_exists("prototype", $context))) {
            // line 19
            echo "            ";
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("data-prototype" => $context["artgris"]->getrender_media(($context["prototype"] ?? $this->getContext($context, "prototype")), true, $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "id", array()), ($context["conf"] ?? $this->getContext($context, "conf")))));
            // line 20
            echo "            ";
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("data-prototype-name" => $this->getAttribute($this->getAttribute(($context["prototype"] ?? $this->getContext($context, "prototype")), "vars", array()), "name", array())));
            // line 21
            echo "        ";
        }
        // line 22
        echo "        ";
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("data-allow-add" => ((($context["allow_add"] ?? $this->getContext($context, "allow_add"))) ? (1) : (0))));
        // line 23
        echo "        ";
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("data-max" => ((($context["data_max"] ?? $this->getContext($context, "data_max"))) ? (($context["data_max"] ?? $this->getContext($context, "data_max"))) : (100))));
        // line 24
        echo "        ";
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("data-min" => ((($context["data_min"] ?? $this->getContext($context, "data_min"))) ? (($context["data_min"] ?? $this->getContext($context, "data_min"))) : (0))));
        // line 25
        echo "        ";
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("data-init-with-n-elements" => ((($context["data_init_with_n_elements"] ?? $this->getContext($context, "data_init_with_n_elements"))) ? (($context["data_init_with_n_elements"] ?? $this->getContext($context, "data_init_with_n_elements"))) : (1))));
        // line 26
        echo "        ";
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("data-add-at-the-end" => ((($context["data_add_at_the_end"] ?? $this->getContext($context, "data_add_at_the_end"))) ? (($context["data_add_at_the_end"] ?? $this->getContext($context, "data_add_at_the_end"))) : (false))));
        // line 27
        echo "        ";
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("data-allow-remove" => ((($context["allow_delete"] ?? $this->getContext($context, "allow_delete"))) ? (1) : (0))));
        // line 28
        echo "        ";
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("data-name-prefix" => ($context["full_name"] ?? $this->getContext($context, "full_name"))));
        // line 29
        echo "
        <div id=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "id", array()), "html", null, true);
        echo "\"
             class=\"media-list artgris-media-list artgris-media-collection\" ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["attr"] ?? $this->getContext($context, "attr")));
        foreach ($context['_seq'] as $context["k"] => $context["v"]) {
            echo " ";
            echo twig_escape_filter($this->env, $context["k"], "html", null, true);
            echo "=\"";
            echo twig_escape_filter($this->env, $context["v"]);
            echo "\"";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['k'], $context['v'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo ">
        ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["_key"] => $context["media"]) {
            // line 33
            echo "            ";
            echo $context["artgris"]->getrender_media($context["media"], true, $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "id", array()), ($context["conf"] ?? $this->getContext($context, "conf")));
            echo "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['media'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "        </div>

        ";
        // line 37
        $this->loadTemplate("@ArtgrisMedia/form/_modal.html.twig", "@ArtgrisMedia/form/field_media.html.twig", 37)->display($context);
        // line 38
        echo "
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        // line 40
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 43
    public function getrender_media($__form__ = null, $__collection__ = true, $__id__ = null, $__conf__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "form" => $__form__,
            "collection" => $__collection__,
            "id" => $__id__,
            "conf" => $__conf__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "render_media"));

            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "render_media"));

            // line 44
            echo "    ";
            ob_start();
            // line 45
            echo "        <div class=\"artgris-media\">
            <div class=\"row\">
                ";
            // line 47
            if (($context["collection"] ?? $this->getContext($context, "collection"))) {
                // line 48
                echo "                    <div class=\"col-sm-1\">
                        <table class=\"table-sort\">
                            <tr class=\"table-sort-up\">
                                <td><a href=\"#\" class=\"collection-up btn btn-default btn-x-sm\"><span
                                                class=\"fa fa-chevron-up\"></span></a></td>
                            </tr>
                            <tr class=\"table-sort-down\">
                                <td><a href=\"#\" class=\"collection-down btn btn-default btn-x-sm\"><span
                                                class=\"fa fa-chevron-down\"></span></a></td>
                            </tr>
                        </table>
                    </div>
                ";
            }
            // line 61
            echo "
                <div class=\"img-preview col-sm-2\" id=\"preview";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "path", array()), "vars", array()), "id", array()), "html", null, true);
            echo "\">
                    ";
            // line 63
            echo $this->getAttribute($this->env->getExtension('FileManagerBundle\Twig\FileTypeExtension')->fileIcon($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "path", array()), "vars", array()), "data", array())), "html", array());
            echo "
                </div>

                <div class=\"img-description ";
            // line 66
            if (($context["collection"] ?? $this->getContext($context, "collection"))) {
                echo "col-sm-9 img-description-collection ";
            } else {
                echo "col-sm-10";
            }
            echo "\">
                    <table>
                        <tr>
                            <td class=\"td-label td-path\">";
            // line 69
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "path", array()), 'label', array("label_attr" => array("class" => "control-label")));
            echo "</td>
                            <td>";
            // line 70
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "path", array()), 'widget', array("attr" => array("class" => "artgris-media-path")));
            echo "</td>
                        </tr>

                        ";
            // line 73
            if ($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "allow_alt", array())) {
                // line 74
                echo "                            <tr>
                                <td class=\"td-label\">";
                // line 75
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "alt", array()), 'label', array("label_attr" => array("class" => "control-label")));
                echo "</td>
                                <td>";
                // line 76
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "alt", array()), 'widget', array("attr" => array("class" => "artgris-media-alt")));
                echo "</td>
                            </tr>
                        ";
            }
            // line 79
            echo "                    </table>

                    ";
            // line 81
            if (($context["collection"] ?? $this->getContext($context, "collection"))) {
                // line 82
                echo "                        <div class=\"btn-group\" role=\"group\">
                            ";
                // line 83
                $this->loadTemplate("@ArtgrisMedia/form/_btn_manager.html.twig", "@ArtgrisMedia/form/field_media.html.twig", 83)->display(array("id" => ($context["id"] ?? $this->getContext($context, "id")), "form" => ($context["form"] ?? $this->getContext($context, "form")), "conf" => ($context["conf"] ?? $this->getContext($context, "conf"))));
                // line 84
                echo "                        </div>
                    ";
            } else {
                // line 86
                echo "                        <div class=\"upload ";
                if ( !$this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "vars", array()), "allow_alt", array())) {
                    echo "upload-no-alt";
                }
                echo "\">
                            <div class=\"btn-group artgris-browse-group\" role=\"group\">
                                ";
                // line 88
                $this->loadTemplate("@ArtgrisMedia/form/_btn_manager.html.twig", "@ArtgrisMedia/form/field_media.html.twig", 88)->display(array("id" => ($context["id"] ?? $this->getContext($context, "id")), "form" => ($context["form"] ?? $this->getContext($context, "form")), "conf" => ($context["conf"] ?? $this->getContext($context, "conf")), "collection" => false));
                // line 89
                echo "                            </div>
                        </div>
                    ";
            }
            // line 92
            echo "                    ";
            if (($context["collection"] ?? $this->getContext($context, "collection"))) {
                // line 93
                echo "                        <div class=\"actions pull-right\">
                            <a href=\"#\" class=\"js-remove-collection btn btn-danger collection-remove collection-action\"><span
                                        class=\"fa fa-remove\"></span></a>
                        </div>
                    ";
            }
            // line 98
            echo "                </div>
            </div>

            <div class=\"col-m-12 text-center\">
                <progress></progress>
            </div>
        </div>
    ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

            
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "@ArtgrisMedia/form/field_media.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  327 => 98,  320 => 93,  317 => 92,  312 => 89,  310 => 88,  302 => 86,  298 => 84,  296 => 83,  293 => 82,  291 => 81,  287 => 79,  281 => 76,  277 => 75,  274 => 74,  272 => 73,  266 => 70,  262 => 69,  252 => 66,  246 => 63,  242 => 62,  239 => 61,  224 => 48,  222 => 47,  218 => 45,  215 => 44,  194 => 43,  183 => 40,  179 => 38,  177 => 37,  173 => 35,  164 => 33,  160 => 32,  145 => 31,  141 => 30,  138 => 29,  135 => 28,  132 => 27,  129 => 26,  126 => 25,  123 => 24,  120 => 23,  117 => 22,  114 => 21,  111 => 20,  108 => 19,  105 => 18,  103 => 17,  100 => 16,  98 => 15,  95 => 14,  86 => 13,  75 => 10,  73 => 9,  70 => 8,  64 => 6,  62 => 5,  59 => 4,  57 => 3,  54 => 2,  45 => 1,  34 => 42,  32 => 13,  29 => 12,  27 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block artgris_media_widget %}

    {% import _self as artgris %}

    {% spaceless %}
        {{ artgris.render_media(form, false, form.vars.id, conf) }}
    {% endspaceless %}

    {% include '@ArtgrisMedia/form/_modal.html.twig' %}

{% endblock %}

{% block artgris_media_collection_widget %}

    {% import _self as artgris %}

    {% spaceless %}
        {% if prototype is defined %}
            {% set attr = attr|merge({'data-prototype': artgris.render_media(prototype, true, form.vars.id, conf)}) %}
            {% set attr = attr|merge({'data-prototype-name': prototype.vars.name}) %}
        {% endif %}
        {% set attr = attr|merge({'data-allow-add': allow_add ? 1 : 0}) %}
        {% set attr = attr|merge({'data-max': data_max ? data_max : 100}) %}
        {% set attr = attr|merge({'data-min': data_min ? data_min : 0}) %}
        {% set attr = attr|merge({'data-init-with-n-elements': data_init_with_n_elements ? data_init_with_n_elements : 1}) %}
        {% set attr = attr|merge({'data-add-at-the-end': data_add_at_the_end ? data_add_at_the_end : false}) %}
        {% set attr = attr|merge({'data-allow-remove': allow_delete ? 1 : 0 }) %}
        {% set attr = attr|merge({'data-name-prefix': full_name}) %}

        <div id=\"{{ form.vars.id }}\"
             class=\"media-list artgris-media-list artgris-media-collection\" {% for k, v in attr %} {{ k }}=\"{{ v|e }}\"{% endfor %}>
        {% for media in form %}
            {{ artgris.render_media(media, true, form.vars.id, conf) }}
        {% endfor %}
        </div>

        {% include '@ArtgrisMedia/form/_modal.html.twig' %}

    {% endspaceless %}

{% endblock %}

{% macro render_media(form, collection = true, id, conf) %}
    {% spaceless %}
        <div class=\"artgris-media\">
            <div class=\"row\">
                {% if collection %}
                    <div class=\"col-sm-1\">
                        <table class=\"table-sort\">
                            <tr class=\"table-sort-up\">
                                <td><a href=\"#\" class=\"collection-up btn btn-default btn-x-sm\"><span
                                                class=\"fa fa-chevron-up\"></span></a></td>
                            </tr>
                            <tr class=\"table-sort-down\">
                                <td><a href=\"#\" class=\"collection-down btn btn-default btn-x-sm\"><span
                                                class=\"fa fa-chevron-down\"></span></a></td>
                            </tr>
                        </table>
                    </div>
                {% endif %}

                <div class=\"img-preview col-sm-2\" id=\"preview{{ form.path.vars.id }}\">
                    {{ fileIcon(form.path.vars.data).html|raw }}
                </div>

                <div class=\"img-description {% if collection %}col-sm-9 img-description-collection {% else %}col-sm-10{% endif %}\">
                    <table>
                        <tr>
                            <td class=\"td-label td-path\">{{ form_label(form.path, null, {label_attr: {class: 'control-label'}}) }}</td>
                            <td>{{ form_widget(form.path, {attr: {class: 'artgris-media-path'}}) }}</td>
                        </tr>

                        {% if form.vars.allow_alt %}
                            <tr>
                                <td class=\"td-label\">{{ form_label(form.alt, null, {label_attr: {class: 'control-label'}}) }}</td>
                                <td>{{ form_widget(form.alt, {attr: {class: 'artgris-media-alt'}}) }}</td>
                            </tr>
                        {% endif %}
                    </table>

                    {% if collection %}
                        <div class=\"btn-group\" role=\"group\">
                            {% include '@ArtgrisMedia/form/_btn_manager.html.twig' with {'id' : id, 'form' : form, 'conf': conf} only %}
                        </div>
                    {% else %}
                        <div class=\"upload {% if not form.vars.allow_alt %}upload-no-alt{% endif %}\">
                            <div class=\"btn-group artgris-browse-group\" role=\"group\">
                                {% include '@ArtgrisMedia/form/_btn_manager.html.twig' with {'id' : id, 'form' : form, 'conf': conf, 'collection': false} only %}
                            </div>
                        </div>
                    {% endif %}
                    {% if collection %}
                        <div class=\"actions pull-right\">
                            <a href=\"#\" class=\"js-remove-collection btn btn-danger collection-remove collection-action\"><span
                                        class=\"fa fa-remove\"></span></a>
                        </div>
                    {% endif %}
                </div>
            </div>

            <div class=\"col-m-12 text-center\">
                <progress></progress>
            </div>
        </div>
    {% endspaceless %}
{% endmacro %}
", "@ArtgrisMedia/form/field_media.html.twig", "C:\\xampp\\htdocs\\symfony-easyadmin-heroku\\vendor\\artgris\\media-bundle\\Resources\\views\\form\\field_media.html.twig");
    }
}
