<?php
/*
 *  $Id$
 *
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS
 * "AS IS" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT
 * LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR
 * A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT
 * OWNER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL,
 * SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT
 * LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE,
 * DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY
 * THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT
 * (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE
 * OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
 *
 * This software consists of voluntary contributions made by many individuals
 * and is licensed under the LGPL. For more information please see
 * <http://phing.info>.
 */

include_once 'phing/types/DataType.php';
include_once 'phing/filters/HeadFilter.php';
include_once 'phing/filters/IconvFilter.php';
include_once 'phing/filters/TailFilter.php';
include_once 'phing/filters/LineContains.php';
include_once 'phing/filters/LineContainsRegexp.php';
include_once 'phing/filters/ExpandProperties.php';
include_once 'phing/filters/PrefixLines.php';
include_once 'phing/filters/ReplaceRegexp.php';
include_once 'phing/filters/ReplaceTokens.php';
include_once 'phing/filters/ReplaceTokensWithFile.php';
include_once 'phing/filters/StripPhpComments.php';
include_once 'phing/filters/StripLineBreaks.php';
include_once 'phing/filters/StripLineComments.php';
include_once 'phing/filters/StripWhitespace.php';
include_once 'phing/filters/TabToSpaces.php';
include_once 'phing/filters/TidyFilter.php';
include_once 'phing/filters/TranslateGettext.php';
include_once 'phing/filters/XincludeFilter.php';
include_once 'phing/filters/XsltFilter.php';

/**
 * FilterChain may contain a chained set of filter readers.
 *
 * @author    Yannick Lecaillez <yl@seasonfive.com>
 * @version   $Id$
 * @package   phing.types
 */
class FilterChain extends DataType
{

    private $filterReaders = array();

    public function __construct($project = null)
    {
        if ($project) {
            $this->project = $project;
        }
    }

    public function getFilterReaders()
    {
        return $this->filterReaders;
    }

    public function addExpandProperties(ExpandProperties $o)
    {
        $o->setProject($this->project);
        $this->filterReaders[] = $o;
    }

    public function addGettext(TranslateGettext $o)
    {
        $o->setProject($this->project);
        $this->filterReaders[] = $o;
    }

    public function addHeadFilter(HeadFilter $o)
    {
        $o->setProject($this->project);
        $this->filterReaders[] = $o;
    }

    public function addIconvFilter(IconvFilter $o)
    {
        $o->setProject($this->project);
        $this->filterReaders[] = $o;
    }

    public function addTailFilter(TailFilter $o)
    {
        $o->setProject($this->project);
        $this->filterReaders[] = $o;
    }

    public function addLineContains(LineContains $o)
    {
        $o->setProject($this->project);
        $this->filterReaders[] = $o;
    }

    public function addLineContainsRegExp(LineContainsRegExp $o)
    {
        $o->setProject($this->project);
        $this->filterReaders[] = $o;
    }

    public function addPrefixLines(PrefixLines $o)
    {
        $o->setProject($this->project);
        $this->filterReaders[] = $o;
    }

    public function addReplaceTokens(ReplaceTokens $o)
    {
        $o->setProject($this->project);
        $this->filterReaders[] = $o;
    }

    public function addReplaceTokensWithFile(ReplaceTokensWithFile $o)
    {
        $o->setProject($this->project);
        $this->filterReaders[] = $o;
    }

    public function addReplaceRegexp(ReplaceRegexp $o)
    {
        $o->setProject($this->project);
        $this->filterReaders[] = $o;
    }

    public function addStripPhpComments(StripPhpComments $o)
    {
        $o->setProject($this->project);
        $this->filterReaders[] = $o;
    }

    public function addStripLineBreaks(StripLineBreaks $o)
    {
        $o->setProject($this->project);
        $this->filterReaders[] = $o;
    }

    public function addStripLineComments(StripLineComments $o)
    {
        $o->setProject($this->project);
        $this->filterReaders[] = $o;
    }

    public function addStripWhitespace(StripWhitespace $o)
    {
        $o->setProject($this->project);
        $this->filterReaders[] = $o;
    }

    public function addTidyFilter(TidyFilter $o)
    {
        $o->setProject($this->project);
        $this->filterReaders[] = $o;
    }

    public function addTabToSpaces(TabToSpaces $o)
    {
        $o->setProject($this->project);
        $this->filterReaders[] = $o;
    }

    public function addXincludeFilter(XincludeFilter $o)
    {
        $o->setProject($this->project);
        $this->filterReaders[] = $o;
    }

    public function addXsltFilter(XsltFilter $o)
    {
        $o->setProject($this->project);
        $this->filterReaders[] = $o;
    }

    public function addFilterReader(PhingFilterReader $o)
    {
        $o->setProject($this->project);
        $this->filterReaders[] = $o;
    }

    /*
     * Makes this instance in effect a reference to another FilterChain
     * instance.
     *
     * <p>You must not set another attribute or nest elements inside
     * this element if you make it a reference.</p>
     *
     * @param  $r the reference to which this instance is associated
     * @throws BuildException if this instance already has been configured.
    */
    public function setRefid(Reference $r)
    {

        if (count($this->filterReaders) !== 0) {
            throw $this->tooManyAttributes();
        }

        // change this to get the objects from the other reference
        $o = $r->getReferencedObject($this->getProject());
        if ($o instanceof FilterChain) {
            $this->filterReaders = $o->getFilterReaders();
        } else {
            throw new BuildException($r->getRefId() . " doesn't refer to a FilterChain");
        }
        parent::setRefid($r);
    }

}