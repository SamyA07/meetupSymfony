<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_47da10ef6d250fa774b05e53912038d0ea137160a8c1aa2a30f29030a3647d8e extends Twig_Template
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
        $__internal_0549d0e796c00b5635cc869e71d34848a024a0c1bddc9254ab0a607021454680 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0549d0e796c00b5635cc869e71d34848a024a0c1bddc9254ab0a607021454680->enter($__internal_0549d0e796c00b5635cc869e71d34848a024a0c1bddc9254ab0a607021454680_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_14fa4703749a31e1deaa5ae183f8a11a85759ea54578217edd07b2a6d694232c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14fa4703749a31e1deaa5ae183f8a11a85759ea54578217edd07b2a6d694232c->enter($__internal_14fa4703749a31e1deaa5ae183f8a11a85759ea54578217edd07b2a6d694232c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_0549d0e796c00b5635cc869e71d34848a024a0c1bddc9254ab0a607021454680->leave($__internal_0549d0e796c00b5635cc869e71d34848a024a0c1bddc9254ab0a607021454680_prof);

        
        $__internal_14fa4703749a31e1deaa5ae183f8a11a85759ea54578217edd07b2a6d694232c->leave($__internal_14fa4703749a31e1deaa5ae183f8a11a85759ea54578217edd07b2a6d694232c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/home/m2eserv/ameur/Documents/IFI/api-platform/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
