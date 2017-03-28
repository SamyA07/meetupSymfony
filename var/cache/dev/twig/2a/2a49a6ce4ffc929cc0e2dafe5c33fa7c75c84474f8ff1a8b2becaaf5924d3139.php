<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_73ba59c048b21ff758756d1dda142f7796c005c4654d50e8ea977e982dc3b0cd extends Twig_Template
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
        $__internal_6dd962799b8c149ad7659412da1035ea13f8c0ffbfa500a6497242978792be34 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6dd962799b8c149ad7659412da1035ea13f8c0ffbfa500a6497242978792be34->enter($__internal_6dd962799b8c149ad7659412da1035ea13f8c0ffbfa500a6497242978792be34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_5ba2d8fb6ec72ce9f7d3d6c9bc0e42142f0f888b2fd95d2ed716c92195799e6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ba2d8fb6ec72ce9f7d3d6c9bc0e42142f0f888b2fd95d2ed716c92195799e6b->enter($__internal_5ba2d8fb6ec72ce9f7d3d6c9bc0e42142f0f888b2fd95d2ed716c92195799e6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_6dd962799b8c149ad7659412da1035ea13f8c0ffbfa500a6497242978792be34->leave($__internal_6dd962799b8c149ad7659412da1035ea13f8c0ffbfa500a6497242978792be34_prof);

        
        $__internal_5ba2d8fb6ec72ce9f7d3d6c9bc0e42142f0f888b2fd95d2ed716c92195799e6b->leave($__internal_5ba2d8fb6ec72ce9f7d3d6c9bc0e42142f0f888b2fd95d2ed716c92195799e6b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/choice_attributes.html.php", "/home/m2eserv/ameur/Documents/IFI/api-platform/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_attributes.html.php");
    }
}
