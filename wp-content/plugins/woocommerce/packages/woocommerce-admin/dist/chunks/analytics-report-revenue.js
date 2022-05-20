(window.__wcAdmin_webpackJsonp=window.__wcAdmin_webpackJsonp||[]).push([[13],{505:function(e,t,r){"use strict";r.r(t),r.d(t,"default",(function(){return k}));var a=r(0),o=r(1),s=r.n(o),n=r(555),c=r(536),l=r(534),i=r(537),d=r(2),m=r(65),u=r(8),b=r(14),_=r(5),p=r(22),y=r(122),v=r(12),O=r(21),j=r(32),g=r(533),f=r(23),w=r(527);const h=[],R=["orders_count","gross_sales","total_sales","refunds","coupons","taxes","shipping","net_revenue"];class S extends a.Component{constructor(){super(),this.getHeadersContent=this.getHeadersContent.bind(this),this.getRowsContent=this.getRowsContent.bind(this),this.getSummary=this.getSummary.bind(this)}getHeadersContent(){return[{label:Object(d.__)("Date",'woocommerce'),key:"date",required:!0,defaultSort:!0,isLeftAligned:!0,isSortable:!0},{label:Object(d.__)("Orders",'woocommerce'),key:"orders_count",required:!1,isSortable:!0,isNumeric:!0},{label:Object(d.__)("Gross sales",'woocommerce'),key:"gross_sales",required:!1,isSortable:!0,isNumeric:!0},{label:Object(d.__)("Returns",'woocommerce'),key:"refunds",required:!1,isSortable:!0,isNumeric:!0},{label:Object(d.__)("Coupons",'woocommerce'),key:"coupons",required:!1,isSortable:!0,isNumeric:!0},{label:Object(d.__)("Net sales",'woocommerce'),key:"net_revenue",required:!1,isSortable:!0,isNumeric:!0},{label:Object(d.__)("Taxes",'woocommerce'),key:"taxes",required:!1,isSortable:!0,isNumeric:!0},{label:Object(d.__)("Shipping",'woocommerce'),key:"shipping",required:!1,isSortable:!0,isNumeric:!0},{label:Object(d.__)("Total sales",'woocommerce'),key:"total_sales",required:!1,isSortable:!0,isNumeric:!0}]}getRowsContent(){let e=arguments.length>0&&void 0!==arguments[0]?arguments[0]:[];const t=Object(f.d)("dateFormat",O.defaultTableDateFormat),{formatAmount:r,render:o,formatDecimal:s,getCurrencyConfig:n}=this.context;return e.map(e=>{const{coupons:c,gross_sales:l,total_sales:i,net_revenue:d,orders_count:u,refunds:b,shipping:_,taxes:v}=e.subtotals,O=Object(a.createElement)(p.Link,{href:"edit.php?post_type=shop_order&m="+Object(m.format)("Ymd",e.date_start),type:"wp-admin"},Object(y.formatValue)(n(),"number",u));return[{display:Object(a.createElement)(p.Date,{date:e.date_start,visibleFormat:t}),value:e.date_start},{display:O,value:Number(u)},{display:o(l),value:s(l)},{display:r(b),value:s(b)},{display:r(c),value:s(c)},{display:o(d),value:s(d)},{display:o(v),value:s(v)},{display:o(_),value:s(_)},{display:o(i),value:s(i)}]})}getSummary(e){let t=arguments.length>1&&void 0!==arguments[1]?arguments[1]:0;const{orders_count:r=0,gross_sales:a=0,total_sales:o=0,refunds:s=0,coupons:n=0,taxes:c=0,shipping:l=0,net_revenue:i=0}=e,{formatAmount:m,getCurrencyConfig:u}=this.context,b=u();return[{label:Object(d._n)("day","days",t,'woocommerce'),value:Object(y.formatValue)(b,"number",t)},{label:Object(d._n)("order","orders",r,'woocommerce'),value:Object(y.formatValue)(b,"number",r)},{label:Object(d.__)("Gross sales",'woocommerce'),value:m(a)},{label:Object(d.__)("Returns",'woocommerce'),value:m(s)},{label:Object(d.__)("Coupons",'woocommerce'),value:m(n)},{label:Object(d.__)("Net sales",'woocommerce'),value:m(i)},{label:Object(d.__)("Taxes",'woocommerce'),value:m(c)},{label:Object(d.__)("Shipping",'woocommerce'),value:m(l)},{label:Object(d.__)("Total sales",'woocommerce'),value:m(o)}]}render(){const{advancedFilters:e,filters:t,tableData:r,query:o}=this.props;return Object(a.createElement)(g.a,{endpoint:"revenue",getHeadersContent:this.getHeadersContent,getRowsContent:this.getRowsContent,getSummary:this.getSummary,summaryFields:R,query:o,tableData:r,title:Object(d.__)("Revenue",'woocommerce'),columnPrefsKey:"revenue_report_columns",filters:t,advancedFilters:e})}}S.contextType=w.a;const T=Object(_.memoize)((e,t,r,a)=>({tableData:{items:{data:Object(_.get)(a,["data","intervals"],h),totalResults:Object(_.get)(a,["totalResults"],0)},isError:e,isRequesting:t,query:r}}),(e,t,r,a)=>[e,t,Object(j.stringify)(r),Object(_.get)(a,["totalResults"],0),Object(_.get)(a,["data","intervals"],h).length].join(":")),q=Object(_.memoize)((e,t,r,a,o)=>({interval:"day",orderby:t,order:e,page:r,per_page:a,after:Object(O.appendTimestamp)(o.primary.after,"start"),before:Object(O.appendTimestamp)(o.primary.before,"end")}),(e,t,r,a,o)=>[e,t,r,a,o.primary.after,o.primary.before].join(":"));var C=Object(b.compose)(Object(u.withSelect)((e,t)=>{const{query:r,filters:a,advancedFilters:o}=t,{woocommerce_default_date_range:s}=e(v.SETTINGS_STORE_NAME).getSetting("wc_admin","wcAdminSettings"),n=Object(O.getCurrentDates)(r,s),{getReportStats:c,getReportStatsError:l,isResolving:i}=e(v.REPORTS_STORE_NAME),d=q(r.order||"desc",r.orderby||"date",r.paged||1,r.per_page||v.QUERY_DEFAULTS.pageSize,n),m=Object(v.getReportTableQuery)({endpoint:"revenue",query:r,select:e,tableQuery:d,filters:a,advancedFilters:o}),u=c("revenue",m),b=Boolean(l("revenue",m)),_=i("getReportStats",["revenue",m]);return T(b,_,d,u)}))(S),F=r(532);class k extends a.Component{render(){const{path:e,query:t}=this.props;return Object(a.createElement)(a.Fragment,null,Object(a.createElement)(F.a,{query:t,path:e,report:"revenue",filters:n.c,advancedFilters:n.a}),Object(a.createElement)(i.a,{charts:n.b,endpoint:"revenue",query:t,selectedChart:Object(c.a)(t.chart,n.b),filters:n.c,advancedFilters:n.a}),Object(a.createElement)(l.a,{charts:n.b,endpoint:"revenue",path:e,query:t,selectedChart:Object(c.a)(t.chart,n.b),filters:n.c,advancedFilters:n.a}),Object(a.createElement)(C,{query:t,filters:n.c,advancedFilters:n.a}))}}k.propTypes={path:s.a.string.isRequired,query:s.a.object.isRequired}},555:function(e,t,r){"use strict";r.d(t,"b",(function(){return s})),r.d(t,"a",(function(){return n})),r.d(t,"c",(function(){return l}));var a=r(2),o=r(28);const s=Object(o.applyFilters)("woocommerce_admin_revenue_report_charts",[{key:"gross_sales",label:Object(a.__)("Gross sales",'woocommerce'),order:"desc",orderby:"gross_sales",type:"currency",isReverseTrend:!1},{key:"refunds",label:Object(a.__)("Returns",'woocommerce'),order:"desc",orderby:"refunds",type:"currency",isReverseTrend:!0},{key:"coupons",label:Object(a.__)("Coupons",'woocommerce'),order:"desc",orderby:"coupons",type:"currency",isReverseTrend:!1},{key:"net_revenue",label:Object(a.__)("Net sales",'woocommerce'),orderby:"net_revenue",type:"currency",isReverseTrend:!1,labelTooltipText:Object(a.__)("Full refunds are not deducted from tax or net sales totals",'woocommerce')},{key:"taxes",label:Object(a.__)("Taxes",'woocommerce'),order:"desc",orderby:"taxes",type:"currency",isReverseTrend:!1,labelTooltipText:Object(a.__)("Full refunds are not deducted from tax or net sales totals",'woocommerce')},{key:"shipping",label:Object(a.__)("Shipping",'woocommerce'),orderby:"shipping",type:"currency",isReverseTrend:!1},{key:"total_sales",label:Object(a.__)("Total sales",'woocommerce'),order:"desc",orderby:"total_sales",type:"currency",isReverseTrend:!1}]),n=Object(o.applyFilters)("woocommerce_admin_revenue_report_advanced_filters",{filters:{},title:Object(a._x)("Revenue Matches {{select /}} Filters","A sentence describing filters for Revenue. See screen shot for context: https://cloudup.com/cSsUY9VeCVJ",'woocommerce')}),c=[];Object.keys(n.filters).length&&(c.push({label:Object(a.__)("All Revenue",'woocommerce'),value:"all"}),c.push({label:Object(a.__)("Advanced Filters",'woocommerce'),value:"advanced"}));const l=Object(o.applyFilters)("woocommerce_admin_revenue_report_filters",[{label:Object(a.__)("Show",'woocommerce'),staticParams:["chartType","paged","per_page"],param:"filter",showFilters:()=>c.length>0,filters:c}])}}]);