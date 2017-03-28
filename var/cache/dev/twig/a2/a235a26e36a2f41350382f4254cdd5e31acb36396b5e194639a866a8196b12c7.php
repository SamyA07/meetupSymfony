<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_83c664472da26bc2a294b545432d0ffec9de0885f24caef37bd081fbe9ca48ba extends Twig_Template
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
        $__internal_a66f867fc907d99602f2dd645aafabf3fde8a31724e30057f9065ea2fa9e0ecc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a66f867fc907d99602f2dd645aafabf3fde8a31724e30057f9065ea2fa9e0ecc->enter($__internal_a66f867fc907d99602f2dd645aafabf3fde8a31724e30057f9065ea2fa9e0ecc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_102594d3cbdd7ab20f8806617573edc582f7b33df9b36d35d95e48dc39da588c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_102594d3cbdd7ab20f8806617573edc582f7b33df9b36d35d95e48dc39da588c->enter($__internal_102594d3cbdd7ab20f8806617573edc582f7b33df9b36d35d95e48dc39da588c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_a66f867fc907d99602f2dd645aafabf3fde8a31724e30057f9065ea2fa9e0ecc->leave($__internal_a66f867fc907d99602f2dd645aafabf3fde8a31724e30057f9065ea2fa9e0ecc_prof);

        
        $__internal_102594d3cbdd7ab20f8806617573edc582f7b33df9b36d35d95e48dc39da588c->leave($__internal_102594d3cbdd7ab20f8806617573edc582f7b33df9b36d35d95e48dc39da588c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/home/m2eserv/ameur/Documents/IFI/api-platform/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}
