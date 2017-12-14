<?php

/* /var/www/cakeapp/vendor/cakephp/bake/src/Template/Bake/Element/Controller/view.twig */
class __TwigTemplate_26d2da61b0f66ba48d459d863535ee09747916fded7ae386f6d5bd9f89df51ce extends Twig_Template
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
        $__internal_007ab76453ea09ad29bdf01d07c4eaecc733d016447fe3dd7ada0565e5d8d2c8 = $this->env->getExtension("WyriHaximus\\TwigView\\Lib\\Twig\\Extension\\Profiler");
        $__internal_007ab76453ea09ad29bdf01d07c4eaecc733d016447fe3dd7ada0565e5d8d2c8->enter($__internal_007ab76453ea09ad29bdf01d07c4eaecc733d016447fe3dd7ada0565e5d8d2c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "/var/www/cakeapp/vendor/cakephp/bake/src/Template/Bake/Element/Controller/view.twig"));

        // line 16
        $context["allAssociations"] = $this->getAttribute(($context["Bake"] ?? null), "aliasExtractor", array(0 => ($context["modelObj"] ?? null), 1 => "BelongsTo"), "method");
        // line 17
        $context["allAssociations"] = twig_array_merge(($context["allAssociations"] ?? null), $this->getAttribute(($context["Bake"] ?? null), "aliasExtractor", array(0 => ($context["modelObj"] ?? null), 1 => "BelongsToMany"), "method"));
        // line 18
        $context["allAssociations"] = twig_array_merge(($context["allAssociations"] ?? null), $this->getAttribute(($context["Bake"] ?? null), "aliasExtractor", array(0 => ($context["modelObj"] ?? null), 1 => "HasOne"), "method"));
        // line 19
        $context["allAssociations"] = twig_array_merge(($context["allAssociations"] ?? null), $this->getAttribute(($context["Bake"] ?? null), "aliasExtractor", array(0 => ($context["modelObj"] ?? null), 1 => "HasMany"), "method"));
        // line 20
        echo "
    /**
     * View method
     *
     * @param string|null \$id ";
        // line 24
        echo twig_escape_filter($this->env, ($context["singularHumanName"] ?? null), "html", null, true);
        echo " id.
     * @return \\Cake\\Http\\Response|void
     * @throws \\Cake\\Datasource\\Exception\\RecordNotFoundException When record not found.
     */
    public function view(\$id = null)
    {
        \$";
        // line 30
        echo twig_escape_filter($this->env, ($context["singularName"] ?? null), "html", null, true);
        echo " = \$this->";
        echo twig_escape_filter($this->env, ($context["currentModelName"] ?? null), "html", null, true);
        echo "->get(\$id, [
            'contain' => [";
        // line 31
        echo $this->getAttribute(($context["Bake"] ?? null), "stringifyList", array(0 => ($context["allAssociations"] ?? null), 1 => array("indent" => false)), "method");
        echo "]
        ]);

        \$this->set('";
        // line 34
        echo twig_escape_filter($this->env, ($context["singularName"] ?? null), "html", null, true);
        echo "', \$";
        echo twig_escape_filter($this->env, ($context["singularName"] ?? null), "html", null, true);
        echo ");
        \$this->set('_serialize', ['";
        // line 35
        echo twig_escape_filter($this->env, ($context["singularName"] ?? null), "html", null, true);
        echo "']);
    }
";
        
        $__internal_007ab76453ea09ad29bdf01d07c4eaecc733d016447fe3dd7ada0565e5d8d2c8->leave($__internal_007ab76453ea09ad29bdf01d07c4eaecc733d016447fe3dd7ada0565e5d8d2c8_prof);

    }

    public function getTemplateName()
    {
        return "/var/www/cakeapp/vendor/cakephp/bake/src/Template/Bake/Element/Controller/view.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 35,  57 => 34,  51 => 31,  45 => 30,  36 => 24,  30 => 20,  28 => 19,  26 => 18,  24 => 17,  22 => 16,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         2.0.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
#}
{% set allAssociations = Bake.aliasExtractor(modelObj, 'BelongsTo') %}
{% set allAssociations = allAssociations|merge(Bake.aliasExtractor(modelObj, 'BelongsToMany')) %}
{% set allAssociations = allAssociations|merge(Bake.aliasExtractor(modelObj, 'HasOne')) %}
{% set allAssociations = allAssociations|merge(Bake.aliasExtractor(modelObj, 'HasMany')) %}

    /**
     * View method
     *
     * @param string|null \$id {{ singularHumanName }} id.
     * @return \\Cake\\Http\\Response|void
     * @throws \\Cake\\Datasource\\Exception\\RecordNotFoundException When record not found.
     */
    public function view(\$id = null)
    {
        \${{ singularName }} = \$this->{{ currentModelName }}->get(\$id, [
            'contain' => [{{ Bake.stringifyList(allAssociations, {'indent': false})|raw }}]
        ]);

        \$this->set('{{ singularName }}', \${{ singularName }});
        \$this->set('_serialize', ['{{ singularName }}']);
    }
", "/var/www/cakeapp/vendor/cakephp/bake/src/Template/Bake/Element/Controller/view.twig", "");
    }
}
