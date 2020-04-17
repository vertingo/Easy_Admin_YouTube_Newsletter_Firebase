<?php

/* @FOSUser/Security/login_content.html.twig */
class __TwigTemplate_a7bd5755668cca00a7edd3201d9989ef2385801b814114f83193cd9dd412bbc1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@EasyAdmin/default/layout.html.twig", "@FOSUser/Security/login_content.html.twig", 1);
        $this->blocks = array(
            'head_stylesheets' => array($this, 'block_head_stylesheets'),
            'page_title' => array($this, 'block_page_title'),
            'body_id' => array($this, 'block_body_id'),
            'header' => array($this, 'block_header'),
            'sidebar' => array($this, 'block_sidebar'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@EasyAdmin/default/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login_content.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login_content.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 6
    public function block_head_stylesheets($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_stylesheets"));

        // line 7
        echo "    ";
        $this->displayParentBlock("head_stylesheets", $context, $blocks);
        echo "
    <style>
        header.main-header,
        aside.main-sidebar {
            display: none;
        }

        .wrapper {
            background: #F5F5F5;
        }

        .fixed .content-wrapper {
            margin-left: 0;
            padding-top: 0;
        }

        body#welcome .content-wrapper {
            margin-left: 0;
        }

        body#welcome #main .box {
            margin: 0 auto;
            max-width: 95%;
            min-height: 150px;
            padding: 1em;
            width: 450px
        }

        body#welcome #main .box--primary {
            background: #FFF;
            border: 1px solid #EEE;
            box-shadow: 0 0 3px #CCC;
            padding: 2em;
        }

        body#welcome #main .box h1 {
            font-size: 21px;
            font-weight: bold;
            margin: 0 0 .5em;
        }

        body#welcome #main .box a {
            font-weight: bold;
            text-decoration: underline;
        }

        body#welcome #main .box code {
            background: #F0F0F0;
            color: inherit;
        }

        body.new .large input.form-control,
        body.edit .large input.form-control,
        body.show .large div.form-control {
            font-size: 21px;
            height: auto;
            padding: 7px;
        }

        @media (min-width: 768px) {
            body#welcome #main .box {
                margin-top: 1em;
            }

            body#welcome #main .box h1 {
                font-size: 24px;
            }

            body#welcome #main .box .login-help {
                color: #777;
                margin-top: 15px;
            }
        }

    </style>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 84
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo "Admin";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 85
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        echo "welcome";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 87
    public function block_header($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        echo "";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 88
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        echo "";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 89
    public function block_main($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 90
        echo "
    <div class=\"box box--primary\">
        <div class=\"row\">
            <h1 class=\"col-sm-12 text-center\">
                <i class=\"fa fa-lock\"></i>
                ";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("loginpage.message", array(), "messages"), "html", null, true);
        echo "
            </h1>
            <div class=\"col-sm-10 col-sm-offset-1\">
                <hr/>
                <form action=\"";
        // line 99
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
                    ";
        // line 100
        if (($context["error"] ?? $this->getContext($context, "error"))) {
            // line 101
            echo "                        <div class=\"has-error\">
                            <p class=\"error-block\">
                                <span class=\"label label-danger\">
                                    ";
            // line 104
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->transchoice("errors", 1, array(), "EasyAdminBundle"), "html", null, true);
            echo "
                                </span>
                                ";
            // line 106
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["error"] ?? $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute(($context["error"] ?? $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "
                            </p>
                        </div>
                    ";
        }
        // line 110
        echo "
                    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 111
        echo twig_escape_filter($this->env, ($context["csrf_token"] ?? $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\"/>

                    <div class=\"form-group\">
                        <label for=\"username\">";
        // line 114
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
                        <input class=\"form-control\" type=\"text\" id=\"username\" name=\"_username\" required=\"required\"/>
                    </div>

                    <div class=\"form-group\">
                        <label for=\"password\">";
        // line 119
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
                        <input class=\"form-control\" type=\"password\" id=\"password\" name=\"_password\" required=\"required\"/>
                    </div>

                    <div class=\"checkbox\">
                        <label>
                            <input type=\"checkbox\" checked id=\"remember_me\" name=\"_remember_me\" value=\"on\"/>
                            ";
        // line 126
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.remember_me", array(), "FOSUserBundle"), "html", null, true);
        echo "
                        </label>
                    </div>

                    <div class=\"form-group\">
                        <button type=\"submit\" class=\"btn btn-primary\" id=\"_submit\" name=\"_submit\">";
        // line 131
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  294 => 131,  286 => 126,  276 => 119,  268 => 114,  262 => 111,  259 => 110,  252 => 106,  247 => 104,  242 => 101,  240 => 100,  236 => 99,  229 => 95,  222 => 90,  213 => 89,  195 => 88,  177 => 87,  159 => 85,  141 => 84,  54 => 7,  45 => 6,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@EasyAdmin/default/layout.html.twig' %}

{% trans_default_domain 'FOSUserBundle' %}


{% block head_stylesheets %}
    {{ parent() }}
    <style>
        header.main-header,
        aside.main-sidebar {
            display: none;
        }

        .wrapper {
            background: #F5F5F5;
        }

        .fixed .content-wrapper {
            margin-left: 0;
            padding-top: 0;
        }

        body#welcome .content-wrapper {
            margin-left: 0;
        }

        body#welcome #main .box {
            margin: 0 auto;
            max-width: 95%;
            min-height: 150px;
            padding: 1em;
            width: 450px
        }

        body#welcome #main .box--primary {
            background: #FFF;
            border: 1px solid #EEE;
            box-shadow: 0 0 3px #CCC;
            padding: 2em;
        }

        body#welcome #main .box h1 {
            font-size: 21px;
            font-weight: bold;
            margin: 0 0 .5em;
        }

        body#welcome #main .box a {
            font-weight: bold;
            text-decoration: underline;
        }

        body#welcome #main .box code {
            background: #F0F0F0;
            color: inherit;
        }

        body.new .large input.form-control,
        body.edit .large input.form-control,
        body.show .large div.form-control {
            font-size: 21px;
            height: auto;
            padding: 7px;
        }

        @media (min-width: 768px) {
            body#welcome #main .box {
                margin-top: 1em;
            }

            body#welcome #main .box h1 {
                font-size: 24px;
            }

            body#welcome #main .box .login-help {
                color: #777;
                margin-top: 15px;
            }
        }

    </style>
{% endblock %}

{% block page_title 'Admin' %}
{% block body_id 'welcome' %}

{% block header '' %}
{% block sidebar '' %}
{% block main %}

    <div class=\"box box--primary\">
        <div class=\"row\">
            <h1 class=\"col-sm-12 text-center\">
                <i class=\"fa fa-lock\"></i>
                {{ 'loginpage.message'|trans({},'messages') }}
            </h1>
            <div class=\"col-sm-10 col-sm-offset-1\">
                <hr/>
                <form action=\"{{ path(\"fos_user_security_check\") }}\" method=\"post\">
                    {% if error %}
                        <div class=\"has-error\">
                            <p class=\"error-block\">
                                <span class=\"label label-danger\">
                                    {{ 'errors'|transchoice(1, domain = 'EasyAdminBundle') }}
                                </span>
                                {{ error.messageKey|trans(error.messageData, 'security') }}
                            </p>
                        </div>
                    {% endif %}

                    <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token }}\"/>

                    <div class=\"form-group\">
                        <label for=\"username\">{{ 'security.login.username'|trans }}</label>
                        <input class=\"form-control\" type=\"text\" id=\"username\" name=\"_username\" required=\"required\"/>
                    </div>

                    <div class=\"form-group\">
                        <label for=\"password\">{{ 'security.login.password'|trans }}</label>
                        <input class=\"form-control\" type=\"password\" id=\"password\" name=\"_password\" required=\"required\"/>
                    </div>

                    <div class=\"checkbox\">
                        <label>
                            <input type=\"checkbox\" checked id=\"remember_me\" name=\"_remember_me\" value=\"on\"/>
                            {{ 'security.login.remember_me'|trans }}
                        </label>
                    </div>

                    <div class=\"form-group\">
                        <button type=\"submit\" class=\"btn btn-primary\" id=\"_submit\" name=\"_submit\">{{ 'security.login.submit'|trans }}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
{% endblock %}
", "@FOSUser/Security/login_content.html.twig", "C:\\xampp\\htdocs\\symfony-easyadmin-heroku\\app\\Resources\\FOSUserBundle\\views\\Security\\login_content.html.twig");
    }
}
