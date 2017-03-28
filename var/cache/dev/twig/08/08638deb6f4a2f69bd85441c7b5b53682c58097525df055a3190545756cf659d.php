<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_0b62ff85b8710e0defec368ceded8067ac66015f4fc0b033f9ce5679ae5841fa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_db1cf633c28249b4847820fbbdaa26f92d1ac2f1812a53e492f950db3a3e224f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db1cf633c28249b4847820fbbdaa26f92d1ac2f1812a53e492f950db3a3e224f->enter($__internal_db1cf633c28249b4847820fbbdaa26f92d1ac2f1812a53e492f950db3a3e224f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_73d2fa24bd98be62ca1500fbd04ef156eb211e4e4fe41a5a0781f864772784d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73d2fa24bd98be62ca1500fbd04ef156eb211e4e4fe41a5a0781f864772784d6->enter($__internal_73d2fa24bd98be62ca1500fbd04ef156eb211e4e4fe41a5a0781f864772784d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_db1cf633c28249b4847820fbbdaa26f92d1ac2f1812a53e492f950db3a3e224f->leave($__internal_db1cf633c28249b4847820fbbdaa26f92d1ac2f1812a53e492f950db3a3e224f_prof);

        
        $__internal_73d2fa24bd98be62ca1500fbd04ef156eb211e4e4fe41a5a0781f864772784d6->leave($__internal_73d2fa24bd98be62ca1500fbd04ef156eb211e4e4fe41a5a0781f864772784d6_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_e63f98d37b034c0bc11fcd2ba6f88bca88a69cd1d55a3bc5c2e3003fed795f8d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e63f98d37b034c0bc11fcd2ba6f88bca88a69cd1d55a3bc5c2e3003fed795f8d->enter($__internal_e63f98d37b034c0bc11fcd2ba6f88bca88a69cd1d55a3bc5c2e3003fed795f8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_e5459b87bec24afd0be80f40550821bc9e0001ee9642b1173b304755d7f848e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5459b87bec24afd0be80f40550821bc9e0001ee9642b1173b304755d7f848e5->enter($__internal_e5459b87bec24afd0be80f40550821bc9e0001ee9642b1173b304755d7f848e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_e5459b87bec24afd0be80f40550821bc9e0001ee9642b1173b304755d7f848e5->leave($__internal_e5459b87bec24afd0be80f40550821bc9e0001ee9642b1173b304755d7f848e5_prof);

        
        $__internal_e63f98d37b034c0bc11fcd2ba6f88bca88a69cd1d55a3bc5c2e3003fed795f8d->leave($__internal_e63f98d37b034c0bc11fcd2ba6f88bca88a69cd1d55a3bc5c2e3003fed795f8d_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/home/m2eserv/ameur/Documents/IFI/api-platform/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
