<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_fe30b528d3a03ed938d0e2d77dc666efa98a858d9aece164504762dc56e42f35 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "WebProfilerBundle:Profiler:open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4ebba3e2b480ed1338bbf7cff6800158958e4ee85ba1dfbf89a2f79ef91517a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ebba3e2b480ed1338bbf7cff6800158958e4ee85ba1dfbf89a2f79ef91517a9->enter($__internal_4ebba3e2b480ed1338bbf7cff6800158958e4ee85ba1dfbf89a2f79ef91517a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_e875d0805590c20f63a95dcd06434c6e295921abfa682a178475bd3428e64b27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e875d0805590c20f63a95dcd06434c6e295921abfa682a178475bd3428e64b27->enter($__internal_e875d0805590c20f63a95dcd06434c6e295921abfa682a178475bd3428e64b27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4ebba3e2b480ed1338bbf7cff6800158958e4ee85ba1dfbf89a2f79ef91517a9->leave($__internal_4ebba3e2b480ed1338bbf7cff6800158958e4ee85ba1dfbf89a2f79ef91517a9_prof);

        
        $__internal_e875d0805590c20f63a95dcd06434c6e295921abfa682a178475bd3428e64b27->leave($__internal_e875d0805590c20f63a95dcd06434c6e295921abfa682a178475bd3428e64b27_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f76ca6fd3361b6f7c690100fceab296091f0fcd6ade487ab02a56987e649a0b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f76ca6fd3361b6f7c690100fceab296091f0fcd6ade487ab02a56987e649a0b7->enter($__internal_f76ca6fd3361b6f7c690100fceab296091f0fcd6ade487ab02a56987e649a0b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_893154fc82c95bc9f6325a8f099af1056674852a1392271b2e1c841d975501be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_893154fc82c95bc9f6325a8f099af1056674852a1392271b2e1c841d975501be->enter($__internal_893154fc82c95bc9f6325a8f099af1056674852a1392271b2e1c841d975501be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_893154fc82c95bc9f6325a8f099af1056674852a1392271b2e1c841d975501be->leave($__internal_893154fc82c95bc9f6325a8f099af1056674852a1392271b2e1c841d975501be_prof);

        
        $__internal_f76ca6fd3361b6f7c690100fceab296091f0fcd6ade487ab02a56987e649a0b7->leave($__internal_f76ca6fd3361b6f7c690100fceab296091f0fcd6ade487ab02a56987e649a0b7_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_662683361870f4282e480062931c44bbd5b51ea07254596e7fbc24f88a3f2484 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_662683361870f4282e480062931c44bbd5b51ea07254596e7fbc24f88a3f2484->enter($__internal_662683361870f4282e480062931c44bbd5b51ea07254596e7fbc24f88a3f2484_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_21d6b90fe6880ad45a256cf17ec1d1d87f130fbaf335e115d9fef5f6f9ee57fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21d6b90fe6880ad45a256cf17ec1d1d87f130fbaf335e115d9fef5f6f9ee57fc->enter($__internal_21d6b90fe6880ad45a256cf17ec1d1d87f130fbaf335e115d9fef5f6f9ee57fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["file"]) || array_key_exists("file", $context) ? $context["file"] : (function () { throw new Twig_Error_Runtime('Variable "file" does not exist.', 11, $this->getSourceContext()); })()), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, (isset($context["line"]) || array_key_exists("line", $context) ? $context["line"] : (function () { throw new Twig_Error_Runtime('Variable "line" does not exist.', 11, $this->getSourceContext()); })()), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt((isset($context["filename"]) || array_key_exists("filename", $context) ? $context["filename"] : (function () { throw new Twig_Error_Runtime('Variable "filename" does not exist.', 15, $this->getSourceContext()); })()), (isset($context["line"]) || array_key_exists("line", $context) ? $context["line"] : (function () { throw new Twig_Error_Runtime('Variable "line" does not exist.', 15, $this->getSourceContext()); })()),  -1);
        echo "
</div>
";
        
        $__internal_21d6b90fe6880ad45a256cf17ec1d1d87f130fbaf335e115d9fef5f6f9ee57fc->leave($__internal_21d6b90fe6880ad45a256cf17ec1d1d87f130fbaf335e115d9fef5f6f9ee57fc_prof);

        
        $__internal_662683361870f4282e480062931c44bbd5b51ea07254596e7fbc24f88a3f2484->leave($__internal_662683361870f4282e480062931c44bbd5b51ea07254596e7fbc24f88a3f2484_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "WebProfilerBundle:Profiler:open.html.twig", "/home/m2eserv/ameur/Documents/IFI/api-platform/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
