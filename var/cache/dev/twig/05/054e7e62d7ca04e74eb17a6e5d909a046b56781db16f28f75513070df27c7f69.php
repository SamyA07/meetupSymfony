<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_bfdbf3d78654b9e1c07ae8f1cbe6d324ea887356de82e98004ac68a0442ec56f extends Twig_Template
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
        $__internal_f694965cdc61fd28fcf15f4e7eb022fd941d28431782719d48f4297e52591a9a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f694965cdc61fd28fcf15f4e7eb022fd941d28431782719d48f4297e52591a9a->enter($__internal_f694965cdc61fd28fcf15f4e7eb022fd941d28431782719d48f4297e52591a9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_5697bcd380e85acd379c2120decade90f45b0a5494ea83f84474bf8e7e2256b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5697bcd380e85acd379c2120decade90f45b0a5494ea83f84474bf8e7e2256b4->enter($__internal_5697bcd380e85acd379c2120decade90f45b0a5494ea83f84474bf8e7e2256b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_f694965cdc61fd28fcf15f4e7eb022fd941d28431782719d48f4297e52591a9a->leave($__internal_f694965cdc61fd28fcf15f4e7eb022fd941d28431782719d48f4297e52591a9a_prof);

        
        $__internal_5697bcd380e85acd379c2120decade90f45b0a5494ea83f84474bf8e7e2256b4->leave($__internal_5697bcd380e85acd379c2120decade90f45b0a5494ea83f84474bf8e7e2256b4_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "TwigBundle:Exception:error.atom.twig", "/home/m2eserv/ameur/Documents/IFI/api-platform/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
