<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_6ae024c41279d8423aae664a0b86bfcfe567c2110059207f73d44b01d72f73e0 extends Twig_Template
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
        $__internal_f53280de23ed4c4edc5fc3948ddcf528c8bc1f67820c40f6e86777ab446155d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f53280de23ed4c4edc5fc3948ddcf528c8bc1f67820c40f6e86777ab446155d4->enter($__internal_f53280de23ed4c4edc5fc3948ddcf528c8bc1f67820c40f6e86777ab446155d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_0fbf90909ddc9a156006a73ab66a8c2ca9d83c1a374131f72983468fe451be8b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0fbf90909ddc9a156006a73ab66a8c2ca9d83c1a374131f72983468fe451be8b->enter($__internal_0fbf90909ddc9a156006a73ab66a8c2ca9d83c1a374131f72983468fe451be8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_f53280de23ed4c4edc5fc3948ddcf528c8bc1f67820c40f6e86777ab446155d4->leave($__internal_f53280de23ed4c4edc5fc3948ddcf528c8bc1f67820c40f6e86777ab446155d4_prof);

        
        $__internal_0fbf90909ddc9a156006a73ab66a8c2ca9d83c1a374131f72983468fe451be8b->leave($__internal_0fbf90909ddc9a156006a73ab66a8c2ca9d83c1a374131f72983468fe451be8b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "/home/m2eserv/ameur/Documents/IFI/api-platform/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rest.html.php");
    }
}
