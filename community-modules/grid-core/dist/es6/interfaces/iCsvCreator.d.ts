// Type definitions for @ag-community/grid-core v22.0.0-beta.0
// Project: http://www.ag-grid.com/
// Definitions by: Niall Crosby <https://github.com/ag-grid/>
import { CsvExportParams } from "./exportParams";
export interface ICsvCreator {
    getDataAsCsv(params?: CsvExportParams): string;
    exportDataAsCsv(params?: CsvExportParams): string;
}