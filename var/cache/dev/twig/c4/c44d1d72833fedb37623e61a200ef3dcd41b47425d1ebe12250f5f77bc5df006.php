<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_eefc3d76e3eb04f468379b924cdea843c432b16a07c01916c255b985bb4e2d91 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7e3d9731e3f9dc46b73c7b04f1e95e55dc35df65cd790af89f51c76c599feb7d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e3d9731e3f9dc46b73c7b04f1e95e55dc35df65cd790af89f51c76c599feb7d->enter($__internal_7e3d9731e3f9dc46b73c7b04f1e95e55dc35df65cd790af89f51c76c599feb7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_0992ea497f1b6013f4db6a2ebcea95f079e65b08a37f7525c2fb3183cea25e61 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0992ea497f1b6013f4db6a2ebcea95f079e65b08a37f7525c2fb3183cea25e61->enter($__internal_0992ea497f1b6013f4db6a2ebcea95f079e65b08a37f7525c2fb3183cea25e61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7e3d9731e3f9dc46b73c7b04f1e95e55dc35df65cd790af89f51c76c599feb7d->leave($__internal_7e3d9731e3f9dc46b73c7b04f1e95e55dc35df65cd790af89f51c76c599feb7d_prof);

        
        $__internal_0992ea497f1b6013f4db6a2ebcea95f079e65b08a37f7525c2fb3183cea25e61->leave($__internal_0992ea497f1b6013f4db6a2ebcea95f079e65b08a37f7525c2fb3183cea25e61_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_b4b2a26e2013a741386237c162ec8a9ce1c409bd2c44fcca197d6d821290a4b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b4b2a26e2013a741386237c162ec8a9ce1c409bd2c44fcca197d6d821290a4b1->enter($__internal_b4b2a26e2013a741386237c162ec8a9ce1c409bd2c44fcca197d6d821290a4b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_62e0a0147caa6e5a27883dba842a25243f7ea1bebbbfad0a283e0d7e9c7051ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62e0a0147caa6e5a27883dba842a25243f7ea1bebbbfad0a283e0d7e9c7051ac->enter($__internal_62e0a0147caa6e5a27883dba842a25243f7ea1bebbbfad0a283e0d7e9c7051ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_62e0a0147caa6e5a27883dba842a25243f7ea1bebbbfad0a283e0d7e9c7051ac->leave($__internal_62e0a0147caa6e5a27883dba842a25243f7ea1bebbbfad0a283e0d7e9c7051ac_prof);

        
        $__internal_b4b2a26e2013a741386237c162ec8a9ce1c409bd2c44fcca197d6d821290a4b1->leave($__internal_b4b2a26e2013a741386237c162ec8a9ce1c409bd2c44fcca197d6d821290a4b1_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_dc745795f78f6f4000de5a1b6738ea3d844fd72cd83d29e5aba45c54b82e1567 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc745795f78f6f4000de5a1b6738ea3d844fd72cd83d29e5aba45c54b82e1567->enter($__internal_dc745795f78f6f4000de5a1b6738ea3d844fd72cd83d29e5aba45c54b82e1567_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_89da7a1ffc0120aabd2d6f7ff585d6235554e12a04b21b076ff77ec52ad7edf1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89da7a1ffc0120aabd2d6f7ff585d6235554e12a04b21b076ff77ec52ad7edf1->enter($__internal_89da7a1ffc0120aabd2d6f7ff585d6235554e12a04b21b076ff77ec52ad7edf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new Twig_Error_Runtime('Variable "location" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new Twig_Error_Runtime('Variable "location" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_89da7a1ffc0120aabd2d6f7ff585d6235554e12a04b21b076ff77ec52ad7edf1->leave($__internal_89da7a1ffc0120aabd2d6f7ff585d6235554e12a04b21b076ff77ec52ad7edf1_prof);

        
        $__internal_dc745795f78f6f4000de5a1b6738ea3d844fd72cd83d29e5aba45c54b82e1567->leave($__internal_dc745795f78f6f4000de5a1b6738ea3d844fd72cd83d29e5aba45c54b82e1567_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/home/m2eserv/ameur/Documents/IFI/api-platform/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
