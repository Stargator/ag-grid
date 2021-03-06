// Type definitions for @ag-grid-community/core v23.2.1
// Project: http://www.ag-grid.com/
// Definitions by: Niall Crosby <https://github.com/ag-grid/>
import { GridPanel } from '../gridPanel/gridPanel';
import { HeaderContainer } from './headerContainer';
import { Component } from '../widgets/component';
import { ManagedFocusComponent } from '../widgets/managedFocusComponent';
export declare type HeaderContainerPosition = 'left' | 'right' | 'center';
export declare class HeaderRootComp extends ManagedFocusComponent {
    private static TEMPLATE;
    private ePinnedLeftHeader;
    private ePinnedRightHeader;
    private eHeaderContainer;
    private eHeaderViewport;
    private gridOptionsWrapper;
    private columnController;
    private gridApi;
    private autoWidthCalculator;
    private headerNavigationService;
    private gridPanel;
    private printLayout;
    private headerContainers;
    constructor();
    protected postConstruct(): void;
    registerGridComp(gridPanel: GridPanel): void;
    private registerHeaderContainer;
    protected onTabKeyDown(e: KeyboardEvent): void;
    protected handleKeyDown(e: KeyboardEvent): void;
    protected onFocusOut(e: FocusEvent): void;
    private onDomLayoutChanged;
    setHorizontalScroll(offset: number): void;
    forEachHeaderElement(callback: (renderedHeaderElement: Component) => void): void;
    refreshHeader(): void;
    private onPivotModeChanged;
    setHeight(height: number): void;
    private addPreventHeaderScroll;
    getHeaderContainers(): Map<HeaderContainerPosition, HeaderContainer>;
    setHeaderContainerWidth(width: number): void;
    setLeftVisible(visible: boolean): void;
    setRightVisible(visible: boolean): void;
}
