<?php

/* WebProfilerBundle:Profiler:header.html.twig */
class __TwigTemplate_3ab0db22834e39d41d78062cb9c8a9cb9731436a0dc6608a8be447376900f6bb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3b85d27a0a6584635e43fba62a3d771553b3b8dc5c010c95629c17388ed0047e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b85d27a0a6584635e43fba62a3d771553b3b8dc5c010c95629c17388ed0047e->enter($__internal_3b85d27a0a6584635e43fba62a3d771553b3b8dc5c010c95629c17388ed0047e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        $__internal_b799509dd277756f42dc1d6da97c550d528ee23c776326421bcdddf3eb2cc73f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b799509dd277756f42dc1d6da97c550d528ee23c776326421bcdddf3eb2cc73f->enter($__internal_b799509dd277756f42dc1d6da97c550d528ee23c776326421bcdddf3eb2cc73f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_3b85d27a0a6584635e43fba62a3d771553b3b8dc5c010c95629c17388ed0047e->leave($__internal_3b85d27a0a6584635e43fba62a3d771553b3b8dc5c010c95629c17388ed0047e_prof);

        
        $__internal_b799509dd277756f42dc1d6da97c550d528ee23c776326421bcdddf3eb2cc73f->leave($__internal_b799509dd277756f42dc1d6da97c550d528ee23c776326421bcdddf3eb2cc73f_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
", "WebProfilerBundle:Profiler:header.html.twig", "/home/m2eserv/ameur/Documents/IFI/api-platform/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/header.html.twig");
    }
}
