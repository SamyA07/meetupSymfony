<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_8f696b73d31cfee365e3dfb14b3f2fbf17163b3ccfd3147e89dcc1c20fd5df3d extends Twig_Template
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
        $__internal_781b09db30d579539400d276b9131d8a24c092fc6e156032e80aa9f0e7dfd25c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_781b09db30d579539400d276b9131d8a24c092fc6e156032e80aa9f0e7dfd25c->enter($__internal_781b09db30d579539400d276b9131d8a24c092fc6e156032e80aa9f0e7dfd25c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_a76a25611566f930797b11308a54179a87d699fcf99631175374c8766d1304de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a76a25611566f930797b11308a54179a87d699fcf99631175374c8766d1304de->enter($__internal_a76a25611566f930797b11308a54179a87d699fcf99631175374c8766d1304de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_781b09db30d579539400d276b9131d8a24c092fc6e156032e80aa9f0e7dfd25c->leave($__internal_781b09db30d579539400d276b9131d8a24c092fc6e156032e80aa9f0e7dfd25c_prof);

        
        $__internal_a76a25611566f930797b11308a54179a87d699fcf99631175374c8766d1304de->leave($__internal_a76a25611566f930797b11308a54179a87d699fcf99631175374c8766d1304de_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/home/m2eserv/ameur/Documents/IFI/api-platform/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}
