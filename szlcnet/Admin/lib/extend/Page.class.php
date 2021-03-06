<?php

class Page
{
    // 默认分页跳转变量
    public $var_page = 'p';
    // 起始行数
    public $firstRow;
    // 列表每页显示行数
    public $listRows;
    // 页数跳转时要带的参数
    public $parameter;
    // 分页静态化
    public $html = false;
    // 分页总页面数
    protected $totalPages;
    // 总行数
    protected $totalRows;
    // 当前页数
    protected $nowPage;
    // 分页的栏的总页数
    protected $coolPages;
    // 分页栏每页显示的页数
    protected $rollPage;
    // 分页显示定制

    protected $config = array(
        'header' => '条记录',
        'prev' => '',
        'next' => '',
        'first' => '第一页',
        'last' => '最后一页',
        'theme' => '<div class="Pagemessage">共<i class="blue">%totalRow%</i>条记录，当前显示第&nbsp;<i class="blue">%nowPage%&nbsp;</i>页</div><ul class="paginList">
            %upPage%  %first% %prePage% %linkPage% %downPage%
        </ul>'
    );

    /**
     * +----------------------------------------------------------
     * 架构函数
     * +----------------------------------------------------------
     *
     * @access public
     *         +----------------------------------------------------------
     * @param array $totalRows
     *            总的记录数
     * @param array $listRows
     *            每页显示记录数
     * @param array $parameter
     *            分页跳转的参数
     *            +----------------------------------------------------------
     */
    public function __construct($totalRows, $listRows, $nowPage = 1, $parameter = '')
    {
        $this->totalRows = $totalRows;
        $this->parameter = $parameter;
        $this->rollPage = 5;
        $this->listRows = !empty ($listRows) ? $listRows : 20;
        $this->totalPages = ceil($this->totalRows / $this->listRows); // 总页数
        $this->coolPages = ceil($this->totalPages / $this->rollPage);
        $this->nowPage = !empty ($_GET [$this->var_page]) ? ( int )$_GET [$this->var_page] : $nowPage;
        if ($this->nowPage < 1)
            $this->nowPage = 1;
        if (!empty ($this->totalPages) && $this->nowPage > $this->totalPages) {
            $this->nowPage = $this->totalPages;
        }
        $this->firstRow = $this->listRows * ($this->nowPage - 1);
    }

    public function setConfig($name, $value)
    {
        if (isset ($this->config [$name])) {
            $this->config [$name] = $value;
        }
    }

    /**
     * +----------------------------------------------------------
     * 分页显示输出
     * +----------------------------------------------------------
     *
     * @access public
     *         +----------------------------------------------------------
     */
    public function show()
    {
        if (0 == $this->totalRows)
            return '';
        $p = $this->var_page;
        $nowCoolPage = ceil($this->nowPage / $this->rollPage);
        $url = $_SERVER ['REQUEST_URI'];
        if ($this->parameter)
            $url .= (strpos($url, '?') ? '&' : '?') . $this->parameter;
        $parse = parse_url($url);
        if (isset ($parse ['query'])) {
            parse_str($parse ['query'], $params);
            unset ($params [$p]);
            $url = $parse ['path'] . '?' . http_build_query($params);
        }
        if ($this->html) {
            $url = preg_replace('/(-' . $p . '-[0-9]+)?\.html/i', '-' . $p . '-' . '%page%' . '.html', $url);
        } else {
            $url = $url . (strpos($url, '?') ? '&' : '?') . $p . '=%page%';
        }
        // 上下翻页字符串
        $upRow = $this->nowPage - 1;
        $downRow = $this->nowPage + 1;
        if ($upRow > 0) {
            $upPage = '<li class="paginItem"><a href="' . str_replace('%page%', $upRow, $url) . '"><span class="pagepre">' . $this->config ['prev'] . '</span></a></li>';
        } else {
            $upPage = '';
        }

        if ($downRow <= $this->totalPages) {
            $downPage = '<li class="paginItem"><a href="' . str_replace('%page%', $downRow, $url) . '"><span class="pagenxt">' . $this->config ['next'] . '</span></a></li>';
        } else {
            $downPage = '';
        }
        // << < > >>
        if ($nowCoolPage == 1) {
            $theFirst = '';
            $prePage = '';
        } else {
            $preRow = $this->nowPage - $this->rollPage;
            // $prePage = '<a href="'.str_replace('%page%',$preRow,$url).'">上'.$this->rollPage.'页</a>';
            $prePage = '<li class="paginItem"><a href="' . str_replace('%page%', $preRow, $url) . '">...</a></li>';
            $theFirst = '<li class="paginItem"><a href="' . str_replace('%page%', 1, $url) . '">' . $this->config ['first'] . '</a></li>';
        }
        if ($nowCoolPage == $this->coolPages) {
            $nextPage = '';
            $theEnd = '';
        } else {
            $nextRow = $this->nowPage + $this->rollPage;
            $theEndRow = $this->totalPages;
            $nextPage = '<li class="paginItem"><a href="' . str_replace('%page%', $nextRow, $url) . '">...</a></li>';
            $theEnd = '<li class="paginItem"><a href="' . str_replace('%page%', $theEndRow, $url) . '">' . $this->config ['last'] . '</a></li>';
        }
        // 1 2 3 4 5
        $linkPage = '';
        for ($i = 1; $i <= $this->rollPage; $i++) {
            $page = ($nowCoolPage - 1) * $this->rollPage + $i;
            if ($page != $this->nowPage) {
                if ($page <= $this->totalPages) {
                    $linkPage .= '<li class="paginItem"><a href="' . str_replace('%page%', $page, $url) . '">&nbsp;' . $page . '&nbsp;</a></li>';
                } else {
                    break;
                }
            } else {
                if ($this->totalPages != 1) {
                    $linkPage .= '<li class="paginItem current"><a>' . $page . '</a></li>';
                }
            }
        }
        $pageStr = str_replace(array(
            '%header%',
            '%nowPage%',
            '%totalRow%',
            '%totalPage%',
            '%upPage%',
            '%downPage%',
            '%first%',
            '%prePage%',
            '%linkPage%',
            '%nextPage%',
            '%end%'
        ), array(
            $this->config ['header'],
            $this->nowPage,
            $this->totalRows,
            $this->totalPages,
            $upPage,
            $downPage,
            $theFirst,
            $prePage,
            $linkPage,
            $nextPage,
            $theEnd
        ), $this->config ['theme']);
        return $pageStr;
    }
}

?>